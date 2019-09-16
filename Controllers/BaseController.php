<?php

class BaseController
{
    protected static $actionPath = "";
    protected static $defaultAction = "index";

    public static function action(?string $viewName = null)
    {
        return require_once '../Views/' . static::$actionPath . ($viewName ?? static::$defaultAction) . '.php';
    }
}