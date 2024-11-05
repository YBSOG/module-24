<?php

namespace App\core;

define('CONTROLLER_NAMESPACE', 'App\\controllers\\');

use App\controllers;

class Route
{
    public static function start()
    {
        // контроллер и действие по умолчанию
        $controllerClassName = 'Home' . 'Controller';
        $actionName = 'index';
        $payload = [];

        $routes = explode('/', $_SERVER['REQUEST_URI']);
//        var_dump($routes);

        if (!empty($routes[1])) {
            $controllerClassName = ucfirst(strtolower($routes[1])) . 'Controller';
        }

        if (!empty($routes[2])) {
            $actionName = strtolower($routes[2]);
        }

        if (!empty($routes[3])) {
            $payload = array_slice($routes, 3);
        }

        $controllerName = CONTROLLER_NAMESPACE . $controllerClassName;

        $controllerFile = $controllerClassName . '.php';

        $controllerPath = CONTROLLERS . $controllerFile;

        if (file_exists($controllerPath)) {
            include_once $controllerPath;
        } else {
            Route::Error();
        }

        $controller = new $controllerName();

        if (method_exists($controller, $actionName)) {
            $controller->$actionName($payload);
        } else {
            Route::Error();
        }

    }

    public static function Error()
    {
        header("HTTP/1.0 404 Not Found");
        header("Status: 404 Not Found");
        header('Location: /error');
    }
}