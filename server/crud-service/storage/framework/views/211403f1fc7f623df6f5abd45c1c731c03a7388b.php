<?php if(session()->has('status')): ?>
    <script src="<?php echo e(asset("assets/vendors/general/toastr/build/toastr.min.js")); ?>" type="text/javascript"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        <?php if( session('status') === 'success' ): ?>
            toastr.success("<?php echo e(session('message')); ?>");
        <?php elseif( session('status') === 'error'): ?>
            toastr.error("<?php echo e(session('message')); ?>");
        <?php endif; ?>
        <?php echo e(Session::forget('status')); ?>

    </script>
<?php endif; ?>
<?php /**PATH /Users/karunakukreja/Desktop/Smart Society/chowkidar-server/server/crud-service/resources/views/includes/show-toast.blade.php ENDPATH**/ ?>