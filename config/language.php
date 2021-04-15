<?php
/**
 * Language.
 *
 * @see App::language
 */

use Framework\Language\Language;

$config['default'] = [
	'default' => 'es',
	'supported' => [
		'en',
		'es',
		'pt-br',
	],
	'fallback_level' => Language::FALLBACK_DEFAULT,
	'directories' => null,
	'negotiate' => true,
];
