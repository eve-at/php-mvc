<?php
class ErrorController extends BaseController
{
    protected static $actionPath = "Error/";

    public function notFoundAction()
    {
        return view('not-found');
    }
}