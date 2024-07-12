<?php

require __DIR__ . '/../vendor/autoload.php';
use Core\Router;

// Iniciar o roteador
$router = new Router();
$router->run();
