<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (is_file(__DIR__ . '/../.env.php')) {
    require __DIR__ . '/../.env.php';
    if (isset($_ENV['ENVIRONMENT'])) {
        $_SERVER['ENVIRONMENT'] = $_ENV['ENVIRONMENT'];
    }
}

if (isset($_SERVER['ENVIRONMENT']) && $_SERVER['ENVIRONMENT'] === 'development') {
    error_reporting(-1);
    ini_set('display_errors', 'On');
} else {
    error_reporting(\E_ALL & ~\E_DEPRECATED & ~\E_NOTICE & ~\E_USER_DEPRECATED & ~\E_USER_NOTICE);
    ini_set('display_errors', 'Off');
}

date_default_timezone_set('UTC');
//set_time_limit(30);
