<?php

require_once('../config/config.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (array_key_exists($page, $routes)) {
    $controllerName = $routes[$page]['controller'];

    require_once('../app/controllers/' . $controllerName . '.php');

    $controller = new $controllerName();

    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo 'Action not found';
    }
} else {
    echo 'Page not found';
}
