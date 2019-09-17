<?php
class AboutUsController extends BaseController
{

    public function indexAction()
    {
        $company = 'Horns and hooves';
        $year = 2019;

        return view('index', compact('company', 'year'));
    }
}