<?php
require 'vendor/autoload.php';

define('APP_NAME', 'Despesas App');

ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/contabonline',
        )
    );
});
