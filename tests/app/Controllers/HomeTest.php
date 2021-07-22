<?php namespace Tests\app\Controllers;

use App;
use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class HomeTest extends TestCase
{
    public function testIndex() : void
    {
        $this->prepareRequest('http://localhost:8080')->runApp();
        self::assertSame(200, App::response()->getStatusCode());
        self::assertStringContainsString('Aplus Framework', App::response()->getBody());
        self::assertSame('home', App::router()->getMatchedRoute()->getName());
    }
}
