<?php

use Framework\MVC\Config;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/constants.php';
require __DIR__ . '/../App.php';
App::init(new Config(CONFIG_DIR));
App::run();
