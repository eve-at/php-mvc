<?php
class Route
{
    public static $validRoutes = [];

    public static function set($route, $callback)
    {
        static::$validRoutes[] = $route;

        if ($_GET['url'] == $route) {
            $callback->__invoke();
        }
    }
}