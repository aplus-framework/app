<?php namespace Tests\Sample;

use Framework\Sample\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
	/**
	 * @var \Framework\Sample\Sample
	 */
	protected $sample;

	public function setup()
	{
		$this->sample = new Sample();
	}

	public function testSample()
	{
		$this->assertEquals(
			'Framework\Sample\Sample::test',
			$this->sample->test()
		);
	}
}
