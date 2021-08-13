<?php
/**
 * Mailer config.
 *
 * @see App::mailer()
 * @see Framework\Email\Mailer::makeConfig()
 * @see https://docs.aplus-framework.com/guides/projects/app/config/mailer.html
 */

use Framework\Email\SMTP;

return [
    'default' => [
        'class' => SMTP::class,
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
