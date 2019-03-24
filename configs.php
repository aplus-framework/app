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
 * @see App::getAutoloader
 */
$config['autoloader']['default'] = [
	'namespaces' => [
		'App' => __DIR__ . '/app',
	],
	'classes' => [],
];
/**
 * Database.
 *
 * @see App::getDatabase
 * @see \Framework\Database\Database::makeConfig
 */
$config['database']['default'] = [
	'username' => 'root',
	'password' => 'password',
	'schema' => 'framework-tests',
	'host' => 'localhost',
];
/**
 * Cache.
 */
$config['cache']['files'] = [
	'prefix' => '',
	'serializer' => 'php',
	'directory' => __DIR__ . '/storage/cache',
	'hash_keys' => true,
	'files_permission' => 0644,
];
$config['cache']['default'] = $config['cache']['files'];
/**
 * Language.
 *
 * @see App::getLanguage
 */
$config['language']['default'] = [
	'default' => 'en',
	'supported' => [
		'en',
		'pt-br',
	],
	'fallback_level' => 2,
	'directories' => null,
];
/**
 * View.
 *
 * @see App::getView
 */
$config['view']['default'] = [
	'base_path' => __DIR__ . '/app/Views',
	'extension' => '.php',
];
