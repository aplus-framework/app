<?php
/**
 * Loads helper files.
 *
 * @param array|string $helper
 *
 * @return array A list of all loaded files
 */
function helpers($helper) : array
{
	if (is_array($helper)) {
		$files = [];
		foreach ($helper as $item) {
			$files[] = helpers($item);
		}
		return array_merge(...$files);
	}
	$files = App::getLocator()->findFiles("Helpers/{$helper}");
	foreach ($files as $file) {
		require_once $file;
	}
	return $files;
}

/**
 * Escape special characters to HTML entities.
 *
 * @param string|null $text     The text to be escaped
 * @param string      $encoding
 *
 * @return string The escaped text
 */
function esc(?string $text, string $encoding = 'UTF-8') : string
{
	$text = (string) $text;
	return empty($text)
		? $text
		: htmlspecialchars($text, \ENT_QUOTES | \ENT_HTML5, $encoding);
}

function normalize_whitespaces(string $string) : string
{
	return trim(preg_replace('/\s+/', ' ', $string));
}

/**
 * Indicates if the current request is a command line request.
 *
 * @return bool TRUE if is a CLI request, otherwise FALSE
 */
function is_cli() : bool
{
	return \PHP_SAPI === 'cli' || defined('STDIN');
}

/**
 * Renders a view.
 *
 * @param string $path     View path
 * @param array  $data     Data passed to the view
 * @param string $instance
 *
 * @return string The rendered view contents
 */
function view(string $path, array $data = [], string $instance = 'default') : string
{
	return App::getView($instance)->render($path, $data);
}

function current_url() : string
{
	return App::getRequest()->getURL();
}

function current_route() : Framework\Routing\Route
{
	return App::getRouter()->getMatchedRoute();
}

function route_url(string $name, array $path_params = [], array $origin_params = []) : string
{
	$route = App::getRouter()->getNamedRoute($name);
	if ($route === null) {
		throw new OutOfBoundsException("Named route not found: {$name}");
	}
	if (empty($origin_params)
		&& $route->getOrigin() === App::getRouter()->getMatchedRoute()->getOrigin()
	) {
		$origin_params = App::getRouter()->getMatchedOriginParams();
	}
	return $route->getURL($origin_params, $path_params);
}

function lang(string $line, $args = [], string $locale = null) : ?string
{
	return App::getLanguage()->lang($line, $args, $locale);
}

function cache(string $instance = 'default') : Framework\Cache\Cache
{
	return App::getCache($instance);
}
