<?php
    define('PUBLIC_PATH', __DIR__);
    define('APPLICATION_PATH', __DIR__ . '/../app/');
    define('CORE_PATH', __DIR__ . '/../core/');
    define('VIEWS_PATH', __DIR__ . '/../app/Views/');

    spl_autoload_register (function ($class_name) {
        if (file_exists(CORE_PATH . $class_name . '.php')) {
            require_once CORE_PATH . $class_name . '.php';
        } else if (file_exists(APPLICATION_PATH .  'Controllers/' . $class_name . '.php')) {
            require_once APPLICATION_PATH . 'Controllers/' . $class_name . '.php';
        }
    });

    require_once CORE_PATH . 'helpers.php';
    require_once CORE_PATH . 'routes.php';

    $app = new App();
    $app->run();