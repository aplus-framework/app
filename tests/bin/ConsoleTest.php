<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\bin;

use Framework\CLI\Streams\Stdout;
use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class ConsoleTest extends TestCase
{
    public function testConsole() : void
    {
        Stdout::init();
        require __DIR__ . '/../../bin/console';
        self::assertStringContainsString('about', Stdout::getContents());
        self::assertStringContainsString('help', Stdout::getContents());
        self::assertStringContainsString('index', Stdout::getContents());
    }
}
