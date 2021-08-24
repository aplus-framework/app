<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require __DIR__ . '/../vendor/autoload.php';

use Framework\Config\Config;

(new App(new Config(CONFIG_DIR)))->runHttp();
