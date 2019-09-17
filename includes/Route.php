<?php
class Route
{
    protected static $validRoutes = [];
    protected static $controller = "Error";
    protected static $action = "not-found";

    public static function set($route, $name, $callback)
    {
        static::$validRoutes[$name] = $route;

        if ($_GET['controller'] == $route) {
            static::$controller = $route;
            static::$action = $_GET['action'] ?? 'index';

            $callback->__invoke(static::$action);
        }
    }

    public static function getController()
    {
        return static::$controller;
    }

    public static function getAction()
    {
        return static::$action;
    }

    public static function getValidRoutes()
    {
        return static::$validRoutes;
    }
}