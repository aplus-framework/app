<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    require_once __DIR__ . '/init.php';
    require_once __DIR__ . '/constants.php';
    require_once BOOT_DIR . 'helpers.php';
    require_once ROOT_DIR . 'App.php';
}

return new App(CONFIG_DIR, ENVIRONMENT === 'development');
