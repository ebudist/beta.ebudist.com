<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        //	return view('welcome_message');
        return view('pages/page1');
    }
    public function about()
    {
        return view('pages/page2');
    }

    //--------------------------------------------------------------------

}
