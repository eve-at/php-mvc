<?php
class IndexController extends BaseController
{

    public function indexAction()
    {
        $metaTitle = "Welcome";

        return view('index', compact('metaTitle'));
    }
}