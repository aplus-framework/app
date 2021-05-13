<?php namespace Tests;

use App;
use Framework\HTTP\URL;
use Framework\MVC\Config;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
	/**
	 * Run the application.
	 *
	 * @param bool $is_cli True if is a CLI request, otherwise false
	 */
	protected function runApp(bool $is_cli = false) : void
	{
		App::init(new Config(CONFIG_DIR));
		App::setIsCLI($is_cli);
		App::run();
	}

	/**
	 * Prepare an HTTP Request for tests.
	 *
	 * @param string|URL     $url
	 * @param string         $method
	 * @param array|string[] $headers
	 * @param string         $body
	 *
	 * @return $this
	 */
	protected function prepareRequest(
		URL | string $url,
		string $method = 'GET',
		array $headers = [],
		string $body = ''
	) {
		if ( ! $url instanceof URL) {
			$url = new URL($url);
		}
		$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';
		$_SERVER['REQUEST_METHOD'] = \strtoupper($method);
		$_SERVER['REQUEST_SCHEME'] = $url->getScheme();
		$_SERVER['HTTP_HOST'] = $url->getHost();
		$_SERVER['REQUEST_URI'] = $url->getPath();
		foreach ($headers as $name => $value) {
			$name = \strtoupper($name);
			$name = \strtr($name, ['-' => '_']);
			$_SERVER['HTTP_' . $name] = $value;
		}
		if (isset($_SERVER['HTTP_COOKIE'])) {
			$cookies = \explode(';', $_SERVER['HTTP_COOKIE']);
			foreach ($cookies as $cookie) {
				$cookie = \explode('=', $cookie, 2);
				$cookie = \array_pad($cookie, 2, '');
				$cookie[0] = \ltrim($cookie[0]);
				$cookie[0] = \strtr($cookie[0], [' ' => '_']);
				$_COOKIE[$cookie[0]] = $cookie[1];
			}
		}
		$_GET = $url->getQueryData();
		App::request()->setBody($body);
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_CONTENT_TYPE'])
			&& ($_SERVER['HTTP_CONTENT_TYPE'] === 'application/x-www-form-urlencoded')
		) {
			\parse_str($body, $_POST);
		}
		return $this;
	}
}
