<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Database config.
 *
 * @see App::database()
 * @see Framework\Database\Database::makeConfig()
 * @see https://docs.aplus-framework.com/guides/libraries/mvc/index.html#database-service
 */
return [
    'default' => [
        'config' => [
            'username' => env('database.default.config.username', 'root'),
            'password' => env('database.default.config.password', 'password'),
            'schema' => env('database.default.config.schema', 'framework-tests'),
            'host' => env('database.default.config.host', 'localhost'),
            'port' => env('database.default.config.port', 3306),
        ],
        'logger_instance' => 'default',
    ],
];
