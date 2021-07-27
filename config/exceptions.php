<?php
/**
 * Exceptions config.
 *
 * @see App::prepareExceptionHandler()
 * @see https://aplus-framework.com/docs/app/config#exceptions
 */

use Framework\Debug\ExceptionHandler;

return [
    'default' => [
        // @phpstan-ignore-next-line
        'environment' => ENVIRONMENT === 'development'
            ? ExceptionHandler::DEVELOPMENT
            : ExceptionHandler::PRODUCTION,
        'views_dir' => null,
        'log' => true,
    ],
];
