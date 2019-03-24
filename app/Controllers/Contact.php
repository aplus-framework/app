<?php namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		echo $this->renderPage('contact/index');
	}

	public function create()
	{
		$data = $this->request->getPOST();
		\var_dump($data);
		//$this->response->redirect(\route_url('contact'));
	}
}
