<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\config;

use PHPUnit\Framework\TestCase;

final class ConfigsTest extends TestCase
{
    public function testConfigs() : void
    {
        $files = (array) \glob(CONFIG_DIR . '*.php');
        foreach ($files as $file) {
            $config = require $file;
            self::assertArrayHasKey('default', $config);
        }
    }
}
