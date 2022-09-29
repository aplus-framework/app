<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Framework\Routing\RouteCollection;

App::router()->serve('http://localhost:8080', static function (RouteCollection $routes) : void {
    $routes->namespace('App\Controllers', [
        $routes->get('/', 'Home::index', 'home'),
    ]);
    $routes->notFound(static fn () => not_found());
});
