<?php

use Framework\HTTP\Request;
use Framework\HTTP\Response;
use Framework\Routing\Collection;

App::router()->serve('http://localhost:{port}', static function (Collection $routes) : void {
	$routes->namespace('App\Controllers', [
		$routes->get('/', 'Home::index', 'home'),
	]);
	$routes->notFound(static function () {
		return not_found();
	});
});

App::router()->setDefaultRouteNotFound(static function (
	array $params,
	Request $request,
	Response $response
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
	$origin = App::router()->getMatchedOrigin();
	$path = App::router()->getMatchedPath();
	$body = '<h1>Error 404</h1>';
	$body .= "<p>Path <code>{$path}</code> not found in the origin <code>{$origin}</code>.</p>";
	return $response->setBody($body);
});
