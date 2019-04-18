<?php namespace App\Controllers;

use App\Models\Contacts;

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
		$contacts = new Contacts();
		$contact = $contacts->create($data);
		if ($contact === false) {
			$errors = $contacts->getErrors();
			\var_dump($errors);
		}
		\var_dump($contact);
		//$this->response->redirect(\route_url('contact'));
	}
}
