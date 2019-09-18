<?php
    define('PUBLIC_PATH', __DIR__);
    define('APPLICATION_PATH', __DIR__ . '/../App/');
    define('VIEWS_PATH', __DIR__ . '/../App/Views/');

    spl_autoload_register (function ($class_name) {
        if (file_exists(APPLICATION_PATH . 'includes/' . $class_name . '.php')) {
            require_once APPLICATION_PATH . 'includes/' . $class_name . '.php';
        } else if (file_exists(APPLICATION_PATH .  'Controllers/' . $class_name . '.php')) {
            require_once APPLICATION_PATH . 'Controllers/' . $class_name . '.php';
        }
    });

    require_once APPLICATION_PATH . 'includes/helpers.php';
    require_once APPLICATION_PATH . 'includes/routes.php';

    $app = new App();
    $app->run();