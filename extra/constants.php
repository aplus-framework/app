<?php
/**
 * @package app
 */
/**
 * The current environment name.
 */
define('ENVIRONMENT', $_SERVER['ENVIRONMENT'] ?? 'production');
/**
 * Path to the root directory.
 */
define('ROOT_DIR', dirname(__DIR__) . \DIRECTORY_SEPARATOR);
/**
 * Path to the app directory.
 */
define('APP_DIR', ROOT_DIR . 'app' . \DIRECTORY_SEPARATOR);
/**
 * Path to the config directory.
 */
define('CONFIG_DIR', ROOT_DIR . 'config' . \DIRECTORY_SEPARATOR);
/**
 * Path to the extra directory.
 */
define('EXTRA_DIR', ROOT_DIR . 'extra' . \DIRECTORY_SEPARATOR);
/**
 * Path to the public directory.
 */
define('PUBLIC_DIR', ROOT_DIR . 'public' . \DIRECTORY_SEPARATOR);
/**
 * Path to the storage directory.
 */
define('STORAGE_DIR', ROOT_DIR . 'storage' . \DIRECTORY_SEPARATOR);
