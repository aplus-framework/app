<?php
define('ENVIRONMENT', $_SERVER['ENVIRONMENT'] ?? 'production');
define('ROOT_DIR', dirname(__DIR__) . '/');
define('APP_DIR', ROOT_DIR . 'app/');
define('CONFIG_DIR', ROOT_DIR . 'config/');
define('EXTRA_DIR', ROOT_DIR . 'extra/');
define('PUBLIC_DIR', ROOT_DIR . 'public/');
define('STORAGE_DIR', ROOT_DIR . 'storage/');
