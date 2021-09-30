<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    require __DIR__ . '/../extra/init.php';
    require __DIR__ . '/../extra/constants.php';
    require EXTRA_DIR . 'helpers.php';
    require ROOT_DIR . 'App.php';
}

use Framework\Config\Config;

return new App(new Config(CONFIG_DIR));
