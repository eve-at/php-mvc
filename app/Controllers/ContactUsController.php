<?php
class ContactUsController extends BaseController
{

    public function indexAction()
    {
        $metaTitle = 'Contact us';
        $pageTitle = 'Contact us';

        return view('index', compact('metaTitle', 'pageTitle'));
    }
}