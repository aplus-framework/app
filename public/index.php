<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\Config\Config;

(new App(new Config(CONFIG_DIR)))->run();
