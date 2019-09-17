<?php
class ContactUsController extends BaseController
{
    protected static $actionPath = "ContactUs/";

    public function indexAction()
    {
        //

        return view('index');
    }
}