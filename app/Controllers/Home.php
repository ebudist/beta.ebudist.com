<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//	return view('welcome_message');
		return view('home');
		echo view('template/header');
		echo view('templates/footer');
	}
	public function about()
	{
		return view('about');
	}

	//--------------------------------------------------------------------

}
