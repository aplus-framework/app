<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\boot;

use Framework\MVC\App;
use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class AppTest extends TestCase
{
    public function testApp() : void
    {
        $app = require __DIR__ . '/../../boot/app.php';
        self::assertInstanceOf(App::class, $app);
    }
}
