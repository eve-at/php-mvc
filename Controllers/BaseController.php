<?php
class BaseController
{
    public static function action($viewName)
    {
        return require_once '../Views/' . $viewName . '.php';
    }
}