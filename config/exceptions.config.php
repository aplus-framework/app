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
		'clearBuffer' => true,
		'viewsDir' => null,
		'log' => true,
	],
];
