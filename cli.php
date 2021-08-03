#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use Framework\Config\Config;

(new App(new Config(CONFIG_DIR)))->runCli();
