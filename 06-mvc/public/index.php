<?php

require '../vendor/autoload.php';

use M2i\Mvc\App;

$app = new App();
// Ligne utile que si on ne fait pas "php -S ..."
// $app->setBasePath('/poo/06-mvc/public');

// Toutes les routes du site
$app->addRoutes([
    ['GET', '/home', 'HomeController@index'],
    
    ['GET|POST', '/utilisateurs/creer', 'UserController@create'],
    ['GET', '/livres', 'BookController@list'],
    ['GET', '/livre', 'BookController@list'],
    ['GET', '/livres/delete/[i:id]', 'BookController@delete'],


]);

// Lancer l'application
$app->run();
