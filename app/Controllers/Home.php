<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo $this->renderPage('home/index');
	}
}
