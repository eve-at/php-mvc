<?php
if (! function_exists('view')) {
    function view(string $action = null, ?array $params = [])
    {
        if ($controller = str_replace('Controller', '', debug_backtrace()[1]['class'] ?? null)) {
            return new View($controller, $action, $params);
        }

        return (new ErrorController)->notFoundAction();
    }
}