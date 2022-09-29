<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\boot;

use App;
use Framework\HTTP\Response;
use Framework\Session\Session;
use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
final class HelpersTest extends TestCase
{
    public function testHelpers() : void
    {
        $files = helpers('tests');
        self::assertEmpty($files);
        $dir = \realpath(__DIR__ . '/../support/') . \DIRECTORY_SEPARATOR;
        App::autoloader()->addNamespace('Support', $dir);
        $helperPath = $dir . 'Helpers/tests.php';
        $files = helpers('tests');
        self::assertSame([$helperPath], $files);
        $files = helpers(['tests']);
        self::assertSame([$helperPath], $files);
    }

    public function testEsc() : void
    {
        self::assertSame('', esc(null));
        self::assertSame('', esc(''));
        self::assertSame('&lt;script&gt;&lt;/script&gt;', esc('<script></script>'));
    }

    public function testView() : void
    {
        self::assertStringContainsString(
            'Aplus Framework',
            view('home/index')
        );
    }

    public function testCurrentUrl() : void
    {
        $this->app->runHttp('http://localhost:8080');
        self::assertSame('http://localhost:8080/', current_url());
    }

    public function testCurrentRoute() : void
    {
        $this->app->runHttp('http://localhost:8080');
        self::assertMatchedRouteName(current_route()->getName());
    }

    public function testRouteUrl() : void
    {
        $configs = App::config()->get('router');
        $configs['files'][] = __DIR__ . '/../support/routes.php';
        App::config()->set('router', $configs);
        $this->app->runHttp('https://foo.com/users/25');
        self::assertSame(
            'http://localhost:8080/',
            route_url('home')
        );
        self::assertSame(
            'https://foo.com/',
            route_url('test.home')
        );
        self::assertSame(
            'https://foo.com/users/{int}',
            route_url('test.users.show')
        );
        self::assertSame(
            'https://foo.com/users/25',
            route_url('test.users.show', [25])
        );
        self::assertSame(
            'http://foo.com/users/13',
            route_url('test.users.show', [13], ['http'])
        );
    }

    public function testSession() : void
    {
        self::assertInstanceOf(Session::class, session());
    }

    public function testOld() : void
    {
        App::session()->activate();
        App::response()->redirect('/foo', [
            'user' => [
                'name' => 'John Doe',
            ],
            'xss' => '<script>alert("xss")</script>',
        ]);
        App::session()->stop();
        self::assertSame('', old('user'));
        self::assertSame('John Doe', old('user[name]'));
        self::assertSame(
            '&lt;script&gt;alert(&quot;xss&quot;)&lt;/script&gt;',
            old('xss')
        );
        self::assertSame(
            '<script>alert("xss")</script>',
            old('xss', false)
        );
    }

    public function testRedirect() : void
    {
        self::assertNull(App::response()->getHeader('Location'));
        redirect('/foo');
        self::assertSame('/foo', App::response()->getHeader('Location'));
        redirect('/bar', ['foo' => 'Foo']);
        self::assertSame('/bar', App::response()->getHeader('Location'));
        self::assertSame('Foo', App::request()->getRedirectData('foo'));
    }

    public function testCsrfInput() : void
    {
        self::assertStringContainsString('<input', csrf_input());
    }

    public function testNotFound() : void
    {
        $response = not_found();
        self::assertInstanceOf(Response::class, $response);
        self::assertStringContainsString('404', $response->getBody());
        self::assertSame(404, $response->getStatusCode());
    }

    public function testNotFoundJson() : void
    {
        $_SERVER['HTTP_CONTENT_TYPE'] = 'application/json';
        $response = not_found();
        self::assertInstanceOf(Response::class, $response);
        self::assertStringContainsString('404', $response->getBody());
        self::assertSame(404, $response->getStatusCode());
    }

    public function testConfig() : void
    {
        $config = config('view');
        self::assertSame(APP_DIR . 'Views', $config['base_dir']);
        $baseDir = config('view', 'default[base_dir]');
        self::assertSame(APP_DIR . 'Views', $baseDir);
        $baseDir = config('view', 'default[base_dir');
        self::assertSame(APP_DIR . 'Views', $baseDir);
        $baseDir = config('view', 'default[base_directory');
        self::assertNull($baseDir);
    }
}
