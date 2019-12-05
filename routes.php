<?php

use Framework\Routing\Collection;

App::router()->serve('http://localhost:{port}', static function (Collection $routes) {
	$routes->namespace('App\Controllers', [
		$routes->get('/', 'Home::index', 'home'),
		$routes->group('/contact', [
			$routes->get('/', 'Contact::index', 'contact'),
			$routes->post('/', 'Contact::create', 'contact.create'),
		]),
	]);
	$routes->group('/api/v1', [
		$routes->resource('/users', 'App\API\Users', 'api.users'),
	]);
	$routes->notFound('App\Controllers\Errors::notFound');
});
