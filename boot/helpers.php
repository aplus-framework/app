<?php declare(strict_types=1);
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @package app
 */
use Framework\Cache\Cache;
use Framework\Factories\Factory;
use Framework\Helpers\ArraySimple;
use Framework\HTTP\Response;
use Framework\MVC\App;
use Framework\Routing\Route;
use Framework\Session\Session;
use JetBrains\PhpStorm\Pure;

/**
 * Load helper files.
 *
 * @param array<int,string>|string $helper A list of helper names as array
 * or a helper name as string
 *
 * @return array<int,string> A list of all loaded files
 */
function helpers(array | string $helper) : array
{
    if (is_array($helper)) {
        $files = [];
        foreach ($helper as $item) {
            $files[] = helpers($item);
        }
        return array_merge(...$files);
    }
    $files = App::locator()->findFiles('Helpers/' . $helper);
    foreach ($files as $file) {
        require_once $file;
    }
    return $files;
}

/**
 * Escape special characters to HTML entities.
 *
 * @param string|null $text The text to be escaped
 * @param string $encoding The escaped text encoding
 *
 * @return string The escaped text
 */
#[Pure]
function esc(?string $text, string $encoding = 'UTF-8') : string
{
    $text = (string) $text;
    return empty($text)
        ? $text
        : htmlspecialchars($text, \ENT_QUOTES | \ENT_HTML5, $encoding);
}

/**
 * Normalize string whitespaces.
 *
 * @param string $string
 *
 * @return string
 */
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
    return App::isCli();
}

/**
 * Renders a view.
 *
 * @param string $path View path
 * @param array<string,mixed> $variables Variables passed to the view
 * @param string $instance The View instance name
 *
 * @return string The rendered view contents
 */
function view(string $path, array $variables = [], string $instance = 'default') : string
{
    return App::view($instance)->render($path, $variables);
}

/**
 * Get the current URL.
 *
 * @return string
 */
function current_url() : string
{
    return App::request()->getUrl()->getAsString();
}

/**
 * Get the current Route.
 *
 * @return Framework\Routing\Route
 */
function current_route() : Route
{
    return App::router()->getMatchedRoute();
}

/**
 * Get an URL based in a Route name.
 *
 * @param string $name Route name
 * @param array<mixed> $pathArgs Route path arguments
 * @param array<mixed> $originArgs Route origin arguments
 *
 * @return string The Route URL
 */
function route_url(string $name, array $pathArgs = [], array $originArgs = []) : string
{
    $route = App::router()->getNamedRoute($name);
    $matched = App::router()->getMatchedRoute();
    if (empty($originArgs)
        && $matched
        && $route->getOrigin() === $matched->getOrigin()
    ) {
        $originArgs = App::router()->getMatchedOriginArguments();
    }
    return $route->getUrl($originArgs, $pathArgs);
}

/**
 * Renders a language file line with dot notation format.
 *
 * e.g. home.hello matches 'home' for file and 'hello' for line.
 *
 * @param string $line The dot notation file line
 * @param array<int|string,string> $args The arguments to be used in the
 * formatted text
 * @param string|null $locale A custom locale or null to use the current
 *
 * @return string|null The rendered text or null if not found
 */
function lang(string $line, array $args = [], string $locale = null) : ?string
{
    return App::language()->lang($line, $args, $locale);
}

/**
 * Get a Cache instance.
 *
 * @param string $instance
 *
 * @return Framework\Cache\Cache
 */
function cache(string $instance = 'default') : Cache
{
    return App::cache($instance);
}

/**
 * Get the Session instance.
 *
 * @return Framework\Session\Session
 */
function session() : Session
{
    return App::session();
}

/**
 * Get data from old redirect.
 *
 * @param string|null $key Set null to return all data
 * @param bool $escape
 *
 * @see Framework\HTTP\Request::getRedirectData()
 * @see Framework\HTTP\Response::redirect()
 * @see redirect()
 *
 * @return mixed The old value. If $escape is true and the value is not
 * stringable, an empty string will return
 */
function old(?string $key, bool $escape = true) : mixed
{
    App::session()->activate();
    $data = App::request()->getRedirectData($key);
    if ($escape) {
        $data = is_scalar($data) || (is_object($data) && method_exists($data, '__toString'))
            ? esc((string) $data)
            : '';
    }
    return $data;
}

/**
 * Renders the AntiCSRF input.
 *
 * @param string $instance The antiCsrf service instance name
 *
 * @return string An HTML hidden input if antiCsrf service is enabled or an
 * empty string if it is disabled
 */
function csrf_input(string $instance = 'default') : string
{
    return App::antiCsrf($instance)->input();
}

/**
 * Set Response status as "404 Not Found" and auto set body as
 * JSON or HTML page based on Request Content-Type header.
 *
 * @param array<string,mixed> $variables
 *
 * @return Framework\HTTP\Response
 */
function not_found(array $variables = []) : Response
{
    $response = App::response();
    $response->setStatus(404);
    if (App::request()->isJson()) {
        return $response->setJson([
            'error' => [
                'code' => 404,
                'reason' => 'Not Found',
            ],
        ]);
    }
    $variables['title'] ??= lang('routing.error404');
    $variables['message'] ??= lang('routing.pageNotFound');
    return $response->setBody(
        view('errors/404', $variables)
    );
}

/**
 * Sets the HTTP Redirect Response with data accessible in the next HTTP
 * Request.
 *
 * @param string $location Location Header value
 * @param array<int|string,mixed> $data Session data available on next
 * Request
 * @param int|null $code HTTP Redirect status code. Leave null to determine
 * based on the current HTTP method.
 *
 * @see http://en.wikipedia.org/wiki/Post/Redirect/Get
 * @see Framework\HTTP\Request::getRedirectData()
 * @see old()
 *
 * @throws InvalidArgumentException for invalid Redirection code
 *
 * @return Framework\HTTP\Response
 */
function redirect(string $location, array $data = [], int $code = null) : Response
{
    if ($data) {
        App::session()->activate();
    }
    return App::response()->redirect($location, $data, $code);
}

/**
 * Get configs from a service.
 *
 * @param string $name The service name
 * @param string $key The instance name and, optionally, with keys in the
 * ArraySimple keys format
 *
 * @return mixed The key value
 */
function config(string $name, string $key = 'default') : mixed
{
    [$instance, $keys] = array_pad(explode('[', $key, 2), 2, null);
    $config = App::config()->get($name, $instance);
    if ($keys === null) {
        return $config;
    }
    $pos = strpos($keys, ']');
    if ($pos === false) {
        $pos = strlen($key);
    }
    $parent = substr($keys, 0, $pos);
    $keys = substr($keys, $pos + 1);
    $key = $parent . $keys;
    return ArraySimple::value($key, $config);
}

/**
 * Encrypt a plaintext message to a base64 encoded ciphertext.
 *
 * @param string $message The plaintext message
 * @param string $instance The crypto config instance name
 *
 * @throws LengthException If the crypto config binary key length is wrong
 * @throws Exception If an appropriate source of randomness cannot be found
 * @throws SodiumException If libsodium found an error
 *
 * @return string The base64 encoded ciphertext
 */
function encrypt(string $message, string $instance = 'default') : string
{
    $key = App::config()->get('crypto', $instance)['key'] ?? '';
    if (mb_strlen($key, '8bit') !== \SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
        throw new LengthException(
            sprintf(
                "Binary crypto key has not %d bytes on '%s' config",
                \SODIUM_CRYPTO_SECRETBOX_KEYBYTES,
                $instance
            )
        );
    }
    $nonce = random_bytes(\SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
    $ciphertext = sodium_crypto_secretbox($message, $nonce, $key);
    return sodium_bin2base64($nonce . $ciphertext, \SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING);
}

/**
 * Decrypt a base64 encoded ciphertext.
 *
 * @param string $base64 The base64 encoded ciphertext
 * @param string $instance The crypto config instance name
 *
 * @throws LengthException If the crypto config binary key length is wrong
 * @throws SodiumException If libsodium found an error
 *
 * @return false|string The plaintext message or false if cannot be decrypted
 */
function decrypt(string $base64, string $instance = 'default') : false | string
{
    $key = App::config()->get('crypto', $instance)['key'] ?? '';
    if (mb_strlen($key, '8bit') !== \SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
        throw new LengthException(
            sprintf(
                "Binary crypto key has not %d bytes on '%s' config",
                \SODIUM_CRYPTO_SECRETBOX_KEYBYTES,
                $instance
            )
        );
    }
    $bin = sodium_base642bin($base64, \SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING);
    if (mb_strlen($bin, '8bit') <= \SODIUM_CRYPTO_SECRETBOX_NONCEBYTES) {
        return false;
    }
    $nonce = substr($bin, 0, \SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
    $ciphertext = substr($bin, \SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
    return sodium_crypto_secretbox_open($ciphertext, $nonce, $key);
}

/**
 * Get (existing or created) Factory instance based on a custom name.
 *
 * @param string $name The Factory name
 *
 * @return Framework\Factories\Factory The Factory instance
 */
function factory(string $name = 'default') : Factory
{
    return Factory::getFactory($name);
}
