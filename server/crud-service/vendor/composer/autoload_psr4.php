<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
<<<<<<< Updated upstream
    'phpDocumentor\\Reflection\\' => array($vendorDir . '/phpdocumentor/reflection-common/src', $vendorDir . '/phpdocumentor/reflection-docblock/src', $vendorDir . '/phpdocumentor/type-resolver/src'),
    'Yajra\\DataTables\\' => array($vendorDir . '/yajra/laravel-datatables-buttons/src', $vendorDir . '/yajra/laravel-datatables-editor/src', $vendorDir . '/yajra/laravel-datatables-fractal/src', $vendorDir . '/yajra/laravel-datatables-html/src', $vendorDir . '/yajra/laravel-datatables-oracle/src'),
=======
    'phpDocumentor\\Reflection\\' => array($vendorDir . '/phpdocumentor/reflection-common/src', $vendorDir . '/phpdocumentor/type-resolver/src', $vendorDir . '/phpdocumentor/reflection-docblock/src'),
    'Yajra\\DataTables\\' => array($vendorDir . '/yajra/laravel-datatables-oracle/src', $vendorDir . '/yajra/laravel-datatables-html/src', $vendorDir . '/yajra/laravel-datatables-fractal/src', $vendorDir . '/yajra/laravel-datatables-buttons/src', $vendorDir . '/yajra/laravel-datatables-editor/src'),
>>>>>>> Stashed changes
    'XdgBaseDir\\' => array($vendorDir . '/dnoegel/php-xdg-base-dir/src'),
    'Whoops\\' => array($vendorDir . '/filp/whoops/src/Whoops'),
    'Webmozart\\Assert\\' => array($vendorDir . '/webmozart/assert/src'),
    'TijsVerkoyen\\CssToInlineStyles\\' => array($vendorDir . '/tijsverkoyen/css-to-inline-styles/src'),
    'Tests\\' => array($baseDir . '/tests'),
    'Symfony\\Polyfill\\Php73\\' => array($vendorDir . '/symfony/polyfill-php73'),
    'Symfony\\Polyfill\\Php72\\' => array($vendorDir . '/symfony/polyfill-php72'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Polyfill\\Intl\\Idn\\' => array($vendorDir . '/symfony/polyfill-intl-idn'),
    'Symfony\\Polyfill\\Iconv\\' => array($vendorDir . '/symfony/polyfill-iconv'),
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'Symfony\\Contracts\\Translation\\' => array($vendorDir . '/symfony/translation-contracts'),
    'Symfony\\Contracts\\Service\\' => array($vendorDir . '/symfony/service-contracts'),
    'Symfony\\Contracts\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher-contracts'),
    'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
    'Symfony\\Component\\VarDumper\\' => array($vendorDir . '/symfony/var-dumper'),
    'Symfony\\Component\\Translation\\' => array($vendorDir . '/symfony/translation'),
    'Symfony\\Component\\Routing\\' => array($vendorDir . '/symfony/routing'),
    'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
    'Symfony\\Component\\Mime\\' => array($vendorDir . '/symfony/mime'),
    'Symfony\\Component\\HttpKernel\\' => array($vendorDir . '/symfony/http-kernel'),
    'Symfony\\Component\\HttpFoundation\\' => array($vendorDir . '/symfony/http-foundation'),
    'Symfony\\Component\\Finder\\' => array($vendorDir . '/symfony/finder'),
    'Symfony\\Component\\Filesystem\\' => array($vendorDir . '/symfony/filesystem'),
    'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
    'Symfony\\Component\\DomCrawler\\' => array($vendorDir . '/symfony/dom-crawler'),
    'Symfony\\Component\\DependencyInjection\\' => array($vendorDir . '/symfony/dependency-injection'),
    'Symfony\\Component\\Debug\\' => array($vendorDir . '/symfony/debug'),
    'Symfony\\Component\\CssSelector\\' => array($vendorDir . '/symfony/css-selector'),
    'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
    'Symfony\\Component\\Config\\' => array($vendorDir . '/symfony/config'),
    'Symfony\\Component\\ClassLoader\\' => array($vendorDir . '/symfony/class-loader'),
    'Symfony\\Component\\BrowserKit\\' => array($vendorDir . '/symfony/browser-kit'),
    'Ramsey\\Uuid\\' => array($vendorDir . '/ramsey/uuid/src'),
    'Psy\\' => array($vendorDir . '/psy/psysh/src'),
    'Psr\\SimpleCache\\' => array($vendorDir . '/psr/simple-cache/src'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Prophecy\\' => array($vendorDir . '/phpspec/prophecy/src/Prophecy'),
    'PhpParser\\' => array($vendorDir . '/nikic/php-parser/lib/PhpParser'),
    'PhpOffice\\PhpSpreadsheet\\' => array($vendorDir . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet'),
    'Overtrue\\PHPLint\\' => array($vendorDir . '/overtrue/phplint/src'),
    'Opis\\Closure\\' => array($vendorDir . '/opis/closure/src'),
    'NunoMaduro\\Collision\\' => array($vendorDir . '/nunomaduro/collision/src'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Matrix\\' => array($vendorDir . '/markbaker/matrix/classes/src'),
    'Maatwebsite\\Excel\\' => array($vendorDir . '/maatwebsite/excel/src'),
    'League\\Fractal\\' => array($vendorDir . '/league/fractal/src'),
    'League\\Flysystem\\' => array($vendorDir . '/league/flysystem/src'),
    'Laravel\\Tinker\\' => array($vendorDir . '/laravel/tinker/src'),
    'Laravel\\Dusk\\' => array($vendorDir . '/laravel/dusk/src'),
    'Laracasts\\Behat\\' => array($vendorDir . '/laracasts/behat-laravel-extension/src'),
    'JakubOnderka\\PhpConsoleHighlighter\\' => array($vendorDir . '/jakub-onderka/php-console-highlighter/src'),
    'JakubOnderka\\PhpConsoleColor\\' => array($vendorDir . '/jakub-onderka/php-console-color/src'),
    'Interop\\Container\\' => array($vendorDir . '/container-interop/container-interop/src/Interop/Container'),
    'Illuminate\\' => array($vendorDir . '/laravel/framework/src/Illuminate'),
    'Fideloper\\Proxy\\' => array($vendorDir . '/fideloper/proxy/src'),
    'Faker\\' => array($vendorDir . '/fzaninotto/faker/src/Faker'),
    'Facebook\\WebDriver\\' => array($vendorDir . '/facebook/webdriver/lib'),
    'Egulias\\EmailValidator\\' => array($vendorDir . '/egulias/email-validator/EmailValidator'),
    'Dotenv\\' => array($vendorDir . '/vlucas/phpdotenv/src'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
    'Doctrine\\Common\\Lexer\\' => array($vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer'),
    'Doctrine\\Common\\Inflector\\' => array($vendorDir . '/doctrine/inflector/lib/Doctrine/Common/Inflector'),
    'DeepCopy\\' => array($vendorDir . '/myclabs/deep-copy/src/DeepCopy'),
    'Cron\\' => array($vendorDir . '/dragonmantank/cron-expression/src/Cron'),
    'Complex\\' => array($vendorDir . '/markbaker/complex/classes/src'),
    'Collective\\Html\\' => array($vendorDir . '/laravelcollective/html/src'),
    'Carbon\\' => array($vendorDir . '/nesbot/carbon/src/Carbon'),
    'BeyondCode\\DumpServer\\' => array($vendorDir . '/beyondcode/laravel-dump-server/src'),
    'Behat\\Mink\\Driver\\' => array($vendorDir . '/behat/mink-browserkit-driver/src'),
    'Behat\\Mink\\' => array($vendorDir . '/behat/mink/src'),
    'App\\' => array($baseDir . '/app'),
);
