<?php namespace Tests\app\Controllers;

use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class HomeTest extends TestCase
{
    public function testIndex() : void
    {
        $this->prepareRequest('http://localhost:8080')->runApp();
        self::assertResponseStatusCode(200);
        self::assertResponseBodyContains('Aplus Framework');
        self::assertMatchedRouteName('home');
    }
}
