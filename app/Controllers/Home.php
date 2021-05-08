<?php namespace App\Controllers;

use Framework\MVC\Controller;

class Home extends Controller
{
	public function index()
	{
		return view('home/index');
	}
}
