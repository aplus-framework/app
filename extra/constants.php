<?php
define('ENVIRONMENT', $_SERVER['ENVIRONMENT'] ?? 'production');
define('ROOT_DIR', dirname(__DIR__) . \DIRECTORY_SEPARATOR);
define('APP_DIR', ROOT_DIR . 'app' . \DIRECTORY_SEPARATOR);
define('CONFIG_DIR', ROOT_DIR . 'config' . \DIRECTORY_SEPARATOR);
define('EXTRA_DIR', ROOT_DIR . 'extra' . \DIRECTORY_SEPARATOR);
define('PUBLIC_DIR', ROOT_DIR . 'public' . \DIRECTORY_SEPARATOR);
define('STORAGE_DIR', ROOT_DIR . 'storage' . \DIRECTORY_SEPARATOR);
