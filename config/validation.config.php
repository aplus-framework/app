<?php
/**
 * Validation config.
 *
 * @see App::validation
 */

use Framework\MVC\Validator;

return [
	'default' => [
		'validators' => [
			Validator::class,
		],
	],
];
