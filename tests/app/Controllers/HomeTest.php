<?php namespace Tests\app\Controllers;

use App;
use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
class HomeTest extends TestCase
{
	public function testIndex()
	{
		$this->prepareRequest('http://localhost:8080')->runApp();
		$this->assertEquals(200, App::response()->getStatusCode());
		$this->assertStringContainsString('Framework App', App::response()->getBody());
		$this->assertEquals('home', App::router()->getMatchedRoute()->getName());
	}
}
