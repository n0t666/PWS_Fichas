<?php

require_once 'controllers/HomeController.php';
require_once 'controllers/ContaController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'conta' => [
        'index' => ['GET', 'ContaController', 'index'],
        'show' => ['GET', 'ContaController', 'show'],
        'create' => ['GET', 'ContaController', 'create'],
        'store' => ['POST', 'ContaController', 'store'],
        'edit' => ['GET', 'ContaController', 'edit'],
        'update' => ['POST', 'ContaController', 'update'],
        'delete' => ['GET', 'ContaController', 'delete'],
    ],


];
