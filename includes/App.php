<?php
class App
{
    public function run()
    {
        if (! in_array($_GET['controller'], Route::getValidRoutes())) {
            return ErrorController::action('not-found');
        }

        //
    }
}