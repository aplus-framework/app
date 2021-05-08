<?php

use Framework\CodingStandard\Config;
use Framework\CodingStandard\Finder;

return (new Config())->setFinder(
	Finder::create()->in(__DIR__)
);
