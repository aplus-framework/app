<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Cache config.
 *
 * @see App::cache()
 * @see Framework\Cache\FilesCache::$configs
 * @see Framework\Cache\MemcachedCache::$configs
 * @see Framework\Cache\RedisCache::$configs
 * @see https://docs.aplus-framework.com/guides/projects/app/config/cache.html
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
