<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (class_exists(Composer\Autoload\ClassLoader::class, false) === false
    && is_file(__DIR__ . '/../vendor/autoload.php')
) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/init.php';
    require __DIR__ . '/constants.php';
    require BOOT_DIR . 'helpers.php';
    require ROOT_DIR . 'App.php';
}

return new App(CONFIG_DIR, ENVIRONMENT === 'development'); // @phpstan-ignore-line
