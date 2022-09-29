<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\boot;

use Framework\HTTP\Status;
use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class RoutesTest extends TestCase
{
    public function testNotFound() : void
    {
        $this->app->runHttp('http://localhost:8080/foo');
        self::assertResponseStatusCode(Status::NOT_FOUND);
        self::assertResponseBodyContains('Error 404');
        self::assertMatchedRouteName('collection-not-found');
    }
}
