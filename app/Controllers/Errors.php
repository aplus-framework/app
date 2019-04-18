<?php namespace App\Controllers;

class Errors extends BaseController
{
	public function notFound()
	{
		$this->response->setStatusCode(404);
		return $this->renderPage('errors/not-found', [
			'title' => 'Error 404 - Route Not Found',
			'home_url' => route_url('home', [], [8080]), // TODO: origin
		]);
	}
}
