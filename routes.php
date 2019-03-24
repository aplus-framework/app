<?php

use Framework\Routing\Collection;

/**
 * @var \Framework\Routing\Router $router
 */
$router->serve('http://localhost:{port}', function (Collection $routes) {
	$routes->get('/', 'App\Controllers\Home::index', 'home');
	$routes->group('contact', [
		$routes->get('/', 'App\Controllers\Contact::index', 'contact'),
		$routes->post('/', 'App\Controllers\Contact::create', 'contact.create'),
	]);
	$routes->group('api/v1', [
		$routes->resource('/users', 'App\API\Users', 'api.users'),
	]);
	$routes->notFound('App\Controllers\Errors::notFound');
});
