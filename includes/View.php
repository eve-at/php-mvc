<?php

class View
{
    public function __construct(string $controllerName, string $viewName, ?array $params = [])
    {
        extract($params);
        return include_once('../Views/' . $controllerName . '/' . $viewName . '.php');
    }
}