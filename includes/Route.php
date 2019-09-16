<?php
class Route
{
    public static $validRoutes = [];

    public static function set($route, $name, $callback)
    {
        static::$validRoutes[$name] = $route;

        if ($_GET['url'] == $route) {
            $callback->__invoke();
        }
    }
}