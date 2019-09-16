<?php
class App
{
    public function run()
    {
        if (! in_array($_GET['url'], Route::$validRoutes)) {
            return ErrorController::action('not-found');
        }
    }
}