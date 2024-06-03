<?php

require_once 'controllers/HomeController.php';
require_once 'controllers/ContaController.php';
require_once 'controllers/DespesaController.php';

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
    'despesa' => [
        'index' => ['GET', 'DespesaController', 'index'],
        'show' => ['GET', 'DespesaController', 'show'],
        'create' => ['GET', 'DespesaController', 'create'],
        'store' => ['POST', 'DespesaController', 'store'],
        'edit' => ['GET', 'DespesaController', 'edit'],
        'update' => ['POST', 'DespesaController', 'update'],
        'delete' => ['GET', 'DespesaController', 'delete'],
    ],


];
