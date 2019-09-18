<?php
class App
{
    public function run()
    {
        if (! Route::executeActive()) {
            return ErrorController::action('not-found');
        }
    }
}