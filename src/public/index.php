<?php

use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

$router->register('/', function () {
    echo 'Home';
});

$router->register('/index.php/invoices', function () {
    echo 'Invoices';
});


echo $router->resolve($_SERVER['REQUEST_URI']);