<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'laravel');

$routes = array(
    'home' => array(
        'controller' => 'HomeController',
        'actions' => array('index', 'edit', 'update', 'delete')
    ),
    'contact' => array(
        'controller' => 'ContactController',
        'actions' => array('index', 'create', 'store')
    ),
);
