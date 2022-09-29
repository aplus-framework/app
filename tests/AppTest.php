<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests;

use App;
use Framework\Config\Config;

/**
 * @runTestsInSeparateProcesses
 */
final class AppTest extends TestCase
{
    protected function setUp() : void
    {
        //
    }

    public function testInstance() : void
    {
        self::assertInstanceOf(
            \Framework\MVC\App::class,
            new App(new Config(CONFIG_DIR))
        );
    }
}
