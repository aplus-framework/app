<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Mailer config.
 *
 * @see App::mailer()
 * @see Framework\Email\Mailer::makeConfig()
 * @see https://docs.aplus-framework.com/guides/libraries/mvc/index.html#mailer-service
 */

return [
    'default' => [
        'host' => env('mailer.default.host', 'localhost'),
        'port' => env('mailer.default.port', 587),
        'tls' => env('mailer.default.tls', true),
        'username' => env('mailer.default.username'),
        'password' => env('mailer.default.password'),
        'charset' => env('mailer.default.charset', 'utf-8'),
        'crlf' => env('mailer.default.crlf', "\r\n"),
        'keep_alive' => env('mailer.default.keep_alive', false),
        'save_logs' => env('mailer.default.save_logs', false),
    ],
];
