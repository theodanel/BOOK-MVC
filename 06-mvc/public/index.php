<?php

require '../vendor/autoload.php';

use M2i\Mvc\Controller\UserController;

// Permet de styliser les erreurs
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$controller = new UserController();
echo $controller->list();
