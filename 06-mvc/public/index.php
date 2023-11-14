<?php

require '../vendor/autoload.php';

use M2i\Mvc\App;

$app = new App();
// Ligne utile que si on ne fait pas "php -S ..."
// $app->setBasePath('/poo/06-mvc/public');

// Toutes les routes du site
$app->addRoutes([
    ['GET', '/home', 'HomeController@index'],
    ['GET', '/utilisateurs', 'UserController@list'],
    ['GET', '/utilisateurs/[i:id]', 'UserController@show'],
    ['GET|POST', '/utilisateurs/creer', 'UserController@create'],

]);

// Lancer l'application
$app->run();
