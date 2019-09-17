<?php
class AboutUsController extends BaseController
{
    protected static $actionPath = "AboutUs/";

    public function indexAction()
    {
        $company = 'Horns and hooves';
        $year = 2019;

        return view('index', compact('company', 'year'));
    }
}