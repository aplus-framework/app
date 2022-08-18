<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\boot;

use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class ConstantsTest extends TestCase
{
    public function testConstants() : void
    {
        require_once __DIR__ . '/../../boot/constants.php';
        self::assertIsString(ENVIRONMENT);
        self::assertDirectoryExists(ROOT_DIR);
        self::assertDirectoryExists(APP_DIR);
        self::assertDirectoryExists(BIN_DIR);
        self::assertDirectoryExists(BOOT_DIR);
        self::assertDirectoryExists(CONFIG_DIR);
        self::assertDirectoryExists(PUBLIC_DIR);
        self::assertDirectoryExists(STORAGE_DIR);
        self::assertDirectoryExists(VENDOR_DIR);
        self::assertDirectoryExists(APLUS_DIR);
    }
}
