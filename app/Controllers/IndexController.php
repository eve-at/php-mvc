<?php
class IndexController extends BaseController
{

    public function indexAction()
    {
        $metaTitle = "Welcome";
        $pageTitle = "Welcome to Simple MVC example!";

        return view('index', compact('metaTitle', 'pageTitle'));
    }
}