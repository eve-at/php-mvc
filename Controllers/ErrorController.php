<?php
class ErrorController extends BaseController
{

    public function notFoundAction()
    {
        header("HTTP/1.0 404 Not Found");

        $metaTitle = 'Page not found';

        return view('not-found', compact('metaTitle'));
    }
}