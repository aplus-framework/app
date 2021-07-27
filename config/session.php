<?php
/**
 * Session config.
 *
 * @see App::session()
 * @see Framework\Session\Session::setOptions()
 * @see Framework\Session\SaveHandlers\DatabaseHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\FilesHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\MemcachedHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\RedisHandler::prepareConfig()
 * @see https://aplus-framework.com/docs/app/config#session
 */

use Framework\Session\SaveHandlers\FilesHandler;

return [
    'default' => [
        'options' => [],
        'save_handler' => [
            'class' => FilesHandler::class,
            'config' => [
                'prefix' => '',
                'directory' => STORAGE_DIR . 'sessions',
                'match_ip' => false,
                'match_ua' => false,
            ],
        ],
    ],
];
