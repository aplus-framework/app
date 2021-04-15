<?php
/**
 * Cache.
 *
 * @see App::cache
 */
$config['files'] = [
	'driver' => 'Files',
	'configs' => [
		'directory' => __DIR__ . '/../storage/cache',
		'length' => 4096,
	],
	'prefix' => null,
	'serializer' => 'php',
];
$config['default'] = $config['files'];
