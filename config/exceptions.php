<?php
/**
 * Exceptions config.
 *
 * @see App::prepareExceptionHandler()
 * @see https://docs.aplus-framework.com/guides/projects/app/config/exceptions.html
 */

use Framework\Debug\ExceptionHandler;

return [
    'default' => [
        // @phpstan-ignore-next-line
        'environment' => ENVIRONMENT === 'development'
            ? ExceptionHandler::DEVELOPMENT
            : ExceptionHandler::PRODUCTION,
        'views_dir' => null,
        'logger_instance' => 'default',
        'language_instance' => 'default',
    ],
];
