<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->theme->setTitle(lang('home.home'));
		return $this->renderPage('home/index');
	}
}
