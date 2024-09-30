<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
if (is_file(__DIR__ . '/../.env.php')) {
    require __DIR__ . '/../.env.php';
    foreach ($_ENV as $key => $value) {
        $_SERVER[$key] = $value;
    }
}
