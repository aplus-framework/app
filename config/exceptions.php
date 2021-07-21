<?php
/**
 * Exceptions config.
 *
 * @see App::prepareExceptionHandler()
 */

use Framework\Debug\ExceptionHandler;

return [
    'default' => [
        'environment' => ENVIRONMENT === 'development'
            ? ExceptionHandler::DEVELOPMENT
            : ExceptionHandler::PRODUCTION,
        'views_dir' => null,
        'log' => true,
    ],
];
