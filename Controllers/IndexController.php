<?php
class IndexController extends BaseController
{
    protected static $actionPath = "Index/";

    public function indexAction()
    {
        //

        return view('index');
    }
}