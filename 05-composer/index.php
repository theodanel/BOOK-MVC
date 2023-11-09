<?php

require 'vendor/autoload.php'; // Autoload de classes de composer

use M2i\Composer\Boat;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$boat = new Boat('Titanic');

dump($boat);
