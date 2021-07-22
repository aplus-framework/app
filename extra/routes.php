<?php

use Framework\Routing\RouteCollection;

App::router()->serve('http://localhost:{port}', static function (RouteCollection $routes) : void {
    $routes->namespace('App\Controllers', [
        $routes->get('/', 'Home::index', 'home'),
    ]);
});
