<?php
/**
 * Cache config.
 *
 * @see App::cache()
 * @see Framework\Cache\FilesCache::$configs
 * @see Framework\Cache\MemcachedCache::$configs
 * @see Framework\Cache\RedisCache::$configs
 */

use Framework\Cache\Cache;
use Framework\Cache\FilesCache;

return [
    'default' => [
        'class' => FilesCache::class,
        'configs' => [
            'directory' => STORAGE_DIR . 'cache',
        ],
        'prefix' => null,
        'serializer' => Cache::SERIALIZER_PHP,
    ],
];
