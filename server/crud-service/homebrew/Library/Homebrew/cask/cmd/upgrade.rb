# frozen_string_literal: true

require "cask/config"

module Cask
  class Cmd
    class Upgrade < AbstractCommand
      option "--greedy", :greedy, false
      option "--quiet",  :quiet, false
      option "--force", :force, false
      option "--skip-cask-deps", :skip_cask_deps, false

      def initialize(*)
        super
        self.verbose = ($stdout.tty? || verbose?) && !quiet?
      end

      def run
        outdated_casks = casks(alternative: lambda {
          Caskroom.casks.select do |cask|
            cask.outdated?(greedy?)
          end
        }).select do |cask|
          raise CaskNotInstalledError, cask unless cask.installed? || force?

          cask.outdated?(true)
        end

        if outdated_casks.empty?
          oh1 "No Casks to upgrade"
          return
        end

        ohai "Casks with `auto_updates` or `version :latest` will not be upgraded" if args.empty? && !greedy?
        oh1 "Upgrading #{outdated_casks.count} #{"outdated package".pluralize(outdated_casks.count)}:"
        caught_exceptions = []
        outdated_casks.each do |cask|
          begin
            old_cask = CaskLoader.load(cask.installed_caskfile)
            puts "#{cask.full_name} #{old_cask.version} -> #{cask.version}"
            upgrade_cask(old_cask)
          rescue CaskError => e
            caught_exceptions << e
            next
          end
        end
        return if caught_exceptions.empty?
        raise MultipleCaskErrors, caught_exceptions if caught_exceptions.count > 1
        raise caught_exceptions.first if caught_exceptions.count == 1
      end

      def upgrade_cask(old_cask)
        odebug "Started upgrade process for Cask #{old_cask}"
        old_config = old_cask.config

        old_cask_installer =
          Installer.new(old_cask, binaries: binaries?,
                                  verbose:  verbose?,
                                  force:    force?,
                                  upgrade:  true)

        new_cask = CaskLoader.load(old_cask.token)

        new_cask.config = Config.global.merge(old_config)

        new_cask_installer =
          Installer.new(new_cask, binaries:       binaries?,
                                  verbose:        verbose?,
                                  force:          force?,
                                  skip_cask_deps: skip_cask_deps?,
                                  require_sha:    require_sha?,
                                  upgrade:        true,
                                  quarantine:     quarantine?)

        started_upgrade = false
        new_artifacts_installed = false

        begin
          # Start new Cask's installation steps
          new_cask_installer.check_conflicts

          puts new_cask_installer.caveats

          new_cask_installer.fetch

          # Move the old Cask's artifacts back to staging
          old_cask_installer.start_upgrade
          # And flag it so in case of error
          started_upgrade = true

          # Install the new Cask
          new_cask_installer.stage

          new_cask_installer.install_artifacts
          new_artifacts_installed = true

          # If successful, wipe the old Cask from staging
          old_cask_installer.finalize_upgrade
        rescue CaskError => e
          new_cask_installer.uninstall_artifacts if new_artifacts_installed
          new_cask_installer.purge_versioned_files
          old_cask_installer.revert_upgrade if started_upgrade
          raise e
        end
      end

      def self.help
        "upgrades all outdated casks"
      end
    end
  end
end
