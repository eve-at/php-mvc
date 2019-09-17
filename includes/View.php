<?php

class View
{
    public function __construct(string $controllerName, string $viewName, ?array $params = [])
    {
        extract($params);

        ob_start();
        include_once(VIEWS_PATH . $controllerName . '/' . $viewName . '.php');
        $content = ob_get_contents();
        ob_end_clean();

        $metaTitle = static::generateMetaTitle($metaTitle ?? null);

        return include_once(VIEWS_PATH . 'layouts/default.php');
    }

    public static function generateMetaTitle(?string $metaTitle = null, string $delimiter = " | ")
    {
        $mTitle = [];
        if (isset($metaTitle)) {
            $mTitle[] = $metaTitle;
        }
        $mTitle[] = 'Horns and hooves';

        return implode($delimiter, $mTitle);
    }
}