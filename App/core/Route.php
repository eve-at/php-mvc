<?php
class Route
{
    protected static $validRoutes = [];
    protected static $controller = "Error";
    protected static $action = "not-found";

    public static function add($route, $name, $callback)
    {
        static::$validRoutes[$route] = [
            'name' => $name,
            'callback' => $callback
        ];
    }

    public static function getActive()
    {
        if (! isset($_GET['controller'])) {
            return null;
        }

        return static::$validRoutes[$_GET['controller']] ?? null;
    }

    public static function executeActive()
    {
        if (! $route = static::getActive()) {
            return;
        }

        static::$controller = $route;
        static::$action = $_GET['action'] ?? 'index';

        $route['callback']->__invoke(static::$action);
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