<?php
/**
 * Cache config.
 *
 * @see App::cache
 */

use Framework\Cache\Cache;
use Framework\Cache\Files;

return [
	'default' => [
		'driver' => Files::class,
		'configs' => [
			'directory' => STORAGE_DIR . 'cache/',
		],
		'prefix' => null,
		'serializer' => Cache::SERIALIZER_PHP,
	],
];
