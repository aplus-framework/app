<?php
/**
 * Configs.
 *
 * @see App::prepareConfigs
 */
$config['configs']['default'] = [
];
/**
 * Routes.
 *
 * @see App::prepareRoutes
 */
$config['routes']['default'] = [
	__DIR__ . '/routes.php',
];
/**
 * Autoloader.
 *
 * @see App::autoloader
 */
$config['autoloader']['default'] = [
	'namespaces' => [
		'App' => __DIR__ . '/app',
	],
	'classes' => [],
];
/**
 * Cache.
 *
 * @see App::cache
 */
$config['cache']['files'] = [
	'driver' => 'Files',
	'configs' => [
		'directory' => __DIR__ . '/storage/cache',
		'length' => 4096,
	],
	'prefix' => null,
	'serializer' => 'php',
];
$config['cache']['default'] = $config['cache']['files'];
/**
 * Console.
 *
 * @see App::console
 */
$config['console']['default'] = [
	'enabled' => true,
	'defaults' => true,
];
/**
 * Database.
 *
 * @see App::database
 * @see \Framework\Database\Database::makeConfig
 */
$config['database']['default'] = [
	'username' => 'root',
	'password' => 'password',
	'schema' => 'framework-tests',
	'host' => 'localhost',
];
/**
 * Exceptions.
 *
 * @see App::run()
 */
$config['exceptions']['default'] = [
	'clearBuffer' => true,
	'viewsDir' => null,
];
/**
 * Language.
 *
 * @see App::language
 */
$config['language']['default'] = [
	'default' => 'es',
	'supported' => [
		'en',
		'es',
		'pt-br',
	],
	'fallback_level' => \Framework\Language\Language::FALLBACK_DEFAULT,
	'directories' => null,
	'negotiate' => true,
];
/**
 * Logger.
 *
 * @see  App::logger
 */
$config['logger']['default'] = [
	'directory' => __DIR__ . '/storage/logs/',
	'level' => \Framework\Log\Logger::DEBUG,
];
/**
 * Mailer.
 *
 * @see App::mailer
 */
$config['mailer']['default'] = [
	'server' => 'localhost',
	'port' => 587,
	'tls' => true,
	'username' => null,
	'password' => null,
	'charset' => 'utf-8',
	'crlf' => "\r\n",
	'keep_alive' => false,
];
/**
 * Session.
 *
 * @see App::session
 */
$config['session']['default'] = [
	'options' => [],
	'handler' => null,
];
/**
 * Validation.
 *
 * @see App::validation
 */
$config['validation']['default'] = [
	'validators' => [
		\Framework\MVC\Validator::class,
	],
];
/**
 * View.
 *
 * @see App::view
 */
$config['view']['default'] = [
	'base_path' => __DIR__ . '/app/Views',
	'extension' => '.php',
];
