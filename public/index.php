<?php
require __DIR__ . '/../vendor/autoload.php';

use Framework\MVC\Config;

App::init(new Config(CONFIG_DIR));
App::run();
