<?php
    define('PUBLIC_PATH', __DIR__);
    define('APPLICATION_PATH', __DIR__ . '/../');
    define('VIEWS_PATH', __DIR__ . '/../Views/');

    spl_autoload_register (function ($class_name) {
        if (file_exists('../includes/' . $class_name . '.php')) {
            require_once '../includes/' . $class_name . '.php';
        } else if (file_exists('../Controllers/' . $class_name . '.php')) {
            require_once '../Controllers/' . $class_name . '.php';
        }
    });

    require_once '../includes/helpers.php';
    require_once '../includes/routes.php';

    $app = new App();
    $app->run();