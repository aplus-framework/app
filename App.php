<?php

use Framework\Language\Language;

class App extends \Framework\MVC\App
{
	public function getLanguage() : Language
	{
		$service = $this->getService('language');
		if ($service) {
			return $service;
		}
		$config = $this->getConfig('language');
		$service = new Language($config['default']);
		if (isset($config['supported'])) {
			$service->setSupportedLocales($config['supported']);
		}
		if (isset($config['fallback_level'])) {
			$service->setFallbackLevel($config['fallback_level']);
		}
		if (isset($config['directories'])) {
			$service->setDirectories($config['directories']);
		} else {
			foreach ($this->getAutoloader()->getNamespaces() as $directory) {
				$directory = "{$directory}Languages";
				if (is_dir($directory)) {
					$directories[] = $directory;
				}
			}
			if (isset($directories)) {
				$service->setDirectories($directories);
			}
		}
		return $this->setService('language', $service);
	}
}
