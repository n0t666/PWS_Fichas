<?php

require_once 'controllers/AuthController.php';
require_once 'controllers/PlanController.php';

return [
    'defaultRoute' => ['GET', 'AuthController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'plan' => [
        'index' => ['GET', 'PlanController', 'index'],
        'calculate' => ['POST', 'PlanController', 'show'],
    ]

];
