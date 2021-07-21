<?php
/**
 * Exceptions config.
 *
 * @see App::prepareExceptionHandler
 */

use Framework\Debug\ExceptionHandler;

return [
	'default' => [
		'environment' => ENVIRONMENT === 'development'
			? ExceptionHandler::ENV_DEV
			: ExceptionHandler::ENV_PROD,
		'views_dir' => null,
		'log' => true,
	],
];
