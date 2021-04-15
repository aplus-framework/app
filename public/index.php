<?php
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
	require __DIR__ . '/../vendor/autoload.php';
}
require __DIR__ . '/../config/constants.php';
require __DIR__ . '/../App.php';
App::setConfig('configs', [
	__DIR__ . '/configs.php',
]);
App::setConfigsDir(__DIR__ . '/../config');
App::run();
