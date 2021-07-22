<?php
/**
 * Mailer config.
 *
 * @see App::mailer()
 * @see Framework\Email\Mailer::makeConfig()
 */
return [
    'default' => [
        'server' => 'localhost',
        'port' => 587,
        'tls' => true,
        'username' => null,
        'password' => null,
        'charset' => 'utf-8',
        'crlf' => "\r\n",
        'keep_alive' => false,
    ],
];
