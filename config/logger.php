<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Logger config.
 *
 * @see App::logger()
 * @see https://docs.aplus-framework.com/guides/libraries/mvc/index.html#logger-service
 */

use Framework\Log\Loggers\MultiFileLogger;
use Framework\Log\LogLevel;

return [
    'default' => [
        'class' => env('logger.default.class', MultiFileLogger::class),
        'destination' => env('logger.default.destination', STORAGE_DIR . 'logs'),
        'level' => env('logger.default.level', LogLevel::DEBUG),
    ],
];
