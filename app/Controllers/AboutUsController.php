<?php
class AboutUsController extends BaseController
{

    public function indexAction()
    {
        $metaTitle = 'About us';
        $pageTitle = 'About us';
        $company = 'Horns and hooves';
        $year = 2019;

        return view('index', compact('metaTitle', 'pageTitle', 'company', 'year'));
    }
}