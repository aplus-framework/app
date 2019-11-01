<?php namespace App\Commands;

use Framework\CLI\CLI;
use Framework\CLI\Command;
use Framework\Routing\Route;

class Routes extends Command
{
	protected $name = 'routes';
	protected $description = 'Show routes list.';
	protected $usage = 'routes';

	public function run(array $options = [], array $arguments = []) : void
	{
		$all = [];
		foreach (\App::getRouter()->getRoutes() as $method => $routes) {
			foreach ($routes as $route) {
				/**
				 * @var Route $route
				 */
				$all[] = [
					$method,
					$route->getOrigin(),
					$route->getPath(),
					\is_callable($route->getAction()) ? '{closure}' : $route->getAction(),
					$route->getName() ?? '',
				];
			}
		}
		CLI::table($all, ['Method', 'Origin', 'Path', 'Action', 'Name']);
	}
}
