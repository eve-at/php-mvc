<?php
    spl_autoload_register (function ($class_name) {
        if (file_exists('../includes/' . $class_name . '.php')) {
            require_once '../includes/' . $class_name . '.php';
        } else if (file_exists('../Controllers/' . $class_name . '.php')) {
            require_once '../Controllers/' . $class_name . '.php';
        }
    });

    require_once '../Routes.php';

    $app = new App();
    $app->run();