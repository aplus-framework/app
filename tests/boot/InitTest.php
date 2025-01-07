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
final class InitTest extends TestCase
{
    protected function setUp() : void
    {
        \ob_start();
        require __DIR__ . '/../../boot/init.php';
        \ob_end_clean();
    }

    public function testErrorReporting() : void
    {
        if ($_SERVER['ENVIRONMENT'] === 'development') {
            self::assertSame(-1, \error_reporting());
            return;
        }
        self::assertSame(
            \E_ALL & ~\E_DEPRECATED & ~\E_NOTICE & ~\E_USER_DEPRECATED & ~\E_USER_NOTICE,
            \error_reporting()
        );
    }

    public function testDisplayErrors() : void
    {
        if ($_SERVER['ENVIRONMENT'] === 'development') {
            self::assertSame('On', \ini_get('display_errors'));
            return;
        }
        self::assertSame('Off', \ini_get('display_errors'));
    }

    public function testDefaultTimezone() : void
    {
        self::assertSame('UTC', \date_default_timezone_get());
    }
}
