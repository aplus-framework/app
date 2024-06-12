<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\app\Commands;

use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use Tests\TestCase;

#[RunTestsInSeparateProcesses]
final class IndexTest extends TestCase
{
    public function testRun() : void
    {
        $this->app->runCli('index');
        self::assertStdoutContains('index');
    }
}
