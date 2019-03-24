<?php
if (is_file(__DIR__ . '/vendor/autoload.php')) {
	require __DIR__ . '/vendor/autoload.php';
}
require __DIR__ . '/App.php';
require __DIR__ . '/helpers.php';
$app = new App([
	'configs' => [
		'default' => [
			__DIR__ . '/configs.php',
		],
	],
]);
$app->run();
