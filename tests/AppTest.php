<?php namespace Tests\Sample;

use Framework\Language\Language;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
	/**
	 * @var \App
	 */
	protected $app;

	public function setup()
	{
		$this->app = new \App([
			'language' => [
				'default' => [
					'default' => 'en',
				],
			],
		]);
	}

	public function testInstances()
	{
		$this->assertInstanceOf(Language::class, $this->app->getLanguage());
	}
}
