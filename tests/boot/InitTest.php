<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\boot;

use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class InitTest extends TestCase
{
    protected function loadInitFile() : static
    {
        require __DIR__ . '/../../boot/init.php';
        return $this;
    }

    public function testDevelopmentEnvironment() : void
    {
        $_SERVER['ENVIRONMENT'] = 'development';
        $this->loadInitFile();
        self::assertSame(-1, \error_reporting());
        self::assertSame('On', \ini_get('display_errors'));
    }

    public function testProductionEnvironment() : void
    {
        $_SERVER['ENVIRONMENT'] = 'production';
        $this->loadInitFile();
        self::assertSame(
            \E_ALL & ~\E_DEPRECATED & ~\E_NOTICE & ~\E_STRICT & ~\E_USER_DEPRECATED & ~\E_USER_NOTICE,
            \error_reporting()
        );
        self::assertSame('Off', \ini_get('display_errors'));
    }

    public function testDefaultTimezone() : void
    {
        $this->loadInitFile();
        self::assertSame('UTC', \date_default_timezone_get());
    }
}
