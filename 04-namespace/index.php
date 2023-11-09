<?php

// require 'Car/Honda.php';
// require 'Moto/Honda.php';
// require 'Car/Peugeot.php';

// Autoload de classes...
spl_autoload_register(function ($class) {
    $class = substr($class, 4); // Retirer le App\

    // Pour Linux et macOS (Unix)
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    // Car\Honda => Car/Honda

    require $class.'.php'; // Car\Honda.php
});

use App\Car\Honda;
use App\Car\Peugeot;
use App\Moto\Honda as MotoHonda;

$c = new Honda();
var_dump($c);

$m = new MotoHonda();
var_dump($m);

$p = new Peugeot();
var_dump($p);
