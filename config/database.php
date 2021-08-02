<?php
/**
 * Database config.
 *
 * @see App::database()
 * @see Framework\Database\Database::makeConfig()
 * @see https://aplus-framework.com/docs/app/config#database
 */
return [
    'default' => [
        'username' => 'root',
        'password' => 'password',
        'schema' => 'framework-tests',
        'host' => 'localhost',
        'logger_instance' => 'default',
    ],
];
