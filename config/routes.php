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

App::router()->setDefaultRouteNotFound(static function (
	array $params,
	Framework\HTTP\Request $request,
	Framework\HTTP\Response $response
) {
	$response->setStatusLine(404);
	if ($request->isJSON()) {
		return $response->setJSON([
			'error' => [
				'code' => 404,
				'reason' => 'Not Found',
			],
		]);
	}
	return $response->setBody('<h1>Error 404</h1><p>Page not found</p>');
});
