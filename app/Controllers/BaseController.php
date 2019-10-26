<?php namespace App\Controllers;

use Framework\MVC\Controller;

abstract class BaseController extends Controller
{
	protected $viewInstance = 'default';

	protected function renderPage(string $page, array $data = [], string $instance = null) : string
	{
		return view('layouts/default', [
			'title' => $data['title'] ?? 'App',
			'header' => view('includes/header'),
			'main' => view("pages/{$page}", $data),
			'footer' => view('includes/footer'),
		], $instance ?? $this->viewInstance);
	}
}
