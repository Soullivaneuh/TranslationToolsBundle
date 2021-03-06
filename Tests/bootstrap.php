<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

if (!($loader = @include __DIR__.'/../vendor/autoload.php')) {
    die(<<<EOT
You need to install the project dependencies using Composer:
$ wget http://getcomposer.org/composer.phar
OR
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar install --dev
$ phpunit
EOT
    );
}

// include smarty custom autoloader
$smartyLoader = require __DIR__.'/../vendor/prestashop/smarty/Autoloader.php';
Smarty_Autoloader::register();

AnnotationRegistry::registerLoader('class_exists');
