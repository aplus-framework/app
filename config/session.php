<?php
/**
 * Session config.
 *
 * @see App::session()
 * @see Framework\Session\SaveHandlers\DatabaseHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\FilesHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\MemcachedHandler::prepareConfig()
 * @see Framework\Session\SaveHandlers\RedisHandler::prepareConfig()
 */
return [
    'default' => [
        'options' => [],
        'save_handler' => [
            'class' => null,
            'config' => [],
        ],
    ],
];
