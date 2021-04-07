<?php namespace App\Controllers;

class Errors extends BaseController
{
	public function notFound()
	{
		$this->response->setStatusLine(404);
		return $this->renderPage('errors/not-found', [
			'title' => lang('errors.404-notFound'),
			'home_url' => route_url('home', [], [8080]), // TODO: origin
		]);
	}
}
