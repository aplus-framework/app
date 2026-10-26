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
 * @see Aplus\Cache\FilesCache::$configs
 * @see Aplus\Cache\MemcachedCache::$configs
 * @see Aplus\Cache\RedisCache::$configs
 * @see https://docs.aplus-framework.com/guides/libraries/mvc/index.html#cache-service
 */

use Aplus\Cache\FilesCache;
use Aplus\Cache\Serializer;

return [
    'default' => [
        'class' => env('cache.default.class', FilesCache::class),
        'configs' => env('cache.default.configs', [
            'directory' => STORAGE_DIR . 'cache',
        ]),
        'prefix' => env('cache.default.prefix'),
        'serializer' => Serializer::PHP,
        'default_ttl' => null,
        'logger_instance' => 'default',
    ],
];
