Cache
=====

Aplus Framework App Project Cache Config.

This is an example of the *config/cache.php* configuration file delivered
with the App project:

.. code-block:: php

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

Below is an explanation of what each key in the *default* array serves.

- `class`_
- `configs`_
- `prefix`_
- `serializer`_

class
-----

configs
-------

prefix
------

serializer
----------
