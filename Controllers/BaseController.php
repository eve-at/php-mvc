<?php

class BaseController
{
    protected static $actionPath = "";

    public static function action(?string $viewName = 'index')
    {
        $class = get_called_class();
        $viewName .= 'Action';
        if (method_exists($class, $viewName)) {
            return (new $class)->{$viewName}();
        }

        return (new ErrorController)->notFoundAction();
    }
}