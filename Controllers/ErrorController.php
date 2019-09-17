<?php
class ErrorController extends BaseController
{

    public function notFoundAction()
    {
        header("HTTP/1.0 404 Not Found");

        return view('not-found');
    }
}