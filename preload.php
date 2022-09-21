<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require __DIR__ . '/vendor/autoload.php';

use Framework\Autoload\Preloader;

$files = (new Preloader())->load();
echo 'Preloading: ' . \PHP_EOL;
foreach ($files as $index => $file) {
    echo ++$index . ') ' . $file . \PHP_EOL;
}
echo 'Total of ' . count($files) . ' preloaded files.' . \PHP_EOL . \PHP_EOL;
