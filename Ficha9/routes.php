<?php

require_once 'controllers/AuthController.php';
require_once 'controllers/PlanController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/BookController.php';
require_once 'controllers/ChapterController.php';

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
        'show' => ['GET', 'BookController', 'show'],
        'create' => ['GET', 'BookController', 'create'],
        'store' => ['POST', 'BookController', 'store'],
        'delete' => ['GET', 'BookController', 'delete'],
        'update' => ['POST', 'BookController', 'update']
    ],
    'chapter' => [
        'index' => ['GET', 'ChapterController', 'index'],
        'edit' => ['GET', 'ChapterController', 'edit'],
        'show' => ['GET', 'ChapterController', 'show'],
        'create' => ['GET', 'ChapterController', 'create'],
        'store' => ['POST', 'ChapterController', 'store'],
        'delete' => ['GET', 'ChapterController', 'delete'],
        'update' => ['POST', 'ChapterController', 'update']
    ],

];
