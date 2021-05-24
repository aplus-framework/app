<?php
/**
 * Exceptions config.
 *
 * @see App::prepareExceptionHandler
 */

use Framework\Debug\ExceptionHandler;

return [
	'default' => [
		'environment' => ExceptionHandler::ENV_PROD,
		'clearBuffer' => true,
		'viewsDir' => null,
		'log' => true,
	],
];
