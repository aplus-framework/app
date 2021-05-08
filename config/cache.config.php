<?php
/**
 * Cache config.
 *
 * @see App::cache
 */
return [
	'default' => [
		'driver' => 'Files',
		'configs' => [
			'directory' => STORAGE_DIR . 'cache/',
			'length' => 4096,
		],
		'prefix' => null,
		'serializer' => 'php',
	],
];
