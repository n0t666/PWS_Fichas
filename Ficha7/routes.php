<?php

require_once 'controllers/AuthController.php';
require_once 'controllers/PlanController.php';
require_once 'controllers/HomeController.php';
return [
    'defaultRoute' => ['GET', 'AuthController', 'index'],
    'home' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'plan' => []

];
