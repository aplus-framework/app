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
		$data = [
			'name' => $this->request->getPOST('name', \FILTER_SANITIZE_STRING),
			'email' => $this->request->getPOST('email', \FILTER_SANITIZE_EMAIL),
			'message' => $this->request->getPOST('message', \FILTER_SANITIZE_STRING),
		];
		$contacts = new Contacts();
		$data['success'] = (bool) $contacts->create($data);
		$data['errors'] = $contacts->getErrors();
		if ($data['success']) {
			unset($data['name'], $data['email'], $data['message']);
		}
		session();
		$this->response->redirect(route_url('contact'), $data);
	}
}
