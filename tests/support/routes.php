<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Framework\Routing\RouteCollection;

App::router()->serve('{scheme}://foo.com', static function (RouteCollection $routes) : void {
    $routes->get('/', static fn () => 'Homepage', 'home');
    $routes->get('/users/{int}', static fn () => 'Show user', 'users.show');
}, 'test');
