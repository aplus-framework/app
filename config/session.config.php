<?php
/**
 * Session config.
 *
 * @see App::session
 */
return [
	'default' => [
		'options' => [],
		'save_handler' => [
			'class' => null,
			'config' => 'default',
			'match_ip' => false,
			'match_user_agent' => false,
		],
	],
];
