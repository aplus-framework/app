<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\app\Controllers;

use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class HomeTest extends TestCase
{
    public function testIndex() : void
    {
        $this->app->runHttp('http://localhost:8080');
        self::assertResponseStatusCode(200);
        self::assertResponseBodyContains('Aplus Framework');
        self::assertMatchedRouteName('home');
    }
}
