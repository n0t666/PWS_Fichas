<?php

require_once 'controllers/AuthController.php';
require_once 'controllers/PlanController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/BookController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'home' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'plan' => [
        'index' => ['GET', 'PlanController', 'index'],
        'calculate' => ['POST', 'PlanController', 'show'],
    ],
    'book' => [
        'index' => ['GET', 'BookController', 'index'],
        'edit' => ['GET', 'BookController', 'edit'],
    ]

];
