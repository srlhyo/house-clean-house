<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind(Database::class    , function() {
    $config = require base_path('config.php');

    return new Database($config, password: 'abc123');
});

App::setContainer($container);