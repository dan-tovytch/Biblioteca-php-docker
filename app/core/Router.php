<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function __construct()
    {
        $this->routes = [
            '' => 'BookController@list',
            'books' => 'BookController@list',
            'books/detail' => 'BookController@detail',
            'user/login' => 'UserController@login',
            'user/register' => 'UserController@register',
        ];
    }

    public function run()
    {
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        if (array_key_exists($uri, $this->routes)) {
            $this->dispatch($this->routes[$uri]);
        } else {
            echo "404 Not Found";
        }
    }

    protected function dispatch($route)
    {
        list($controller, $method) = explode('@', $route);
        $controller = 'App\\Controllers\\' . $controller;

        if (class_exists($controller) && method_exists($controller, $method)) {
            $controllerInstance = new $controller;
            $controllerInstance->$method();
        } else {
            echo "Controller or method not found";
        }
    }
}
