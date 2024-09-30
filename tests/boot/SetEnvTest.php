<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\boot;

use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use PHPUnit\Framework\TestCase;

#[RunTestsInSeparateProcesses]
final class SetEnvTest extends TestCase
{
    protected function loadSetEnvFile() : static
    {
        require __DIR__ . '/../../boot/set-env.php';
        return $this;
    }

    public function testEnvironmentVar() : void
    {
        $this->loadSetEnvFile();
        self::assertSame($_ENV['ENVIRONMENT'], $_SERVER['ENVIRONMENT']);
    }
}
