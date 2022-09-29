<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\public;

use Framework\HTTP\Status;
use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class IndexTest extends TestCase
{
    public function testIndex() : void
    {
        $_SERVER['REQUEST_SCHEME'] = 'http';
        $_SERVER['HTTP_HOST'] = 'localhost:8080';
        $_SERVER['REQUEST_URI'] = '/';
        \ob_start();
        require __DIR__ . '/../../public/index.php';
        $contents = \ob_get_clean();
        $headers = xdebug_get_headers();
        self::assertNotEmpty($contents);
        self::assertSame(Status::OK, \http_response_code());
        self::assertContains('Content-Type: text/html; charset=UTF-8', $headers);
    }
}
