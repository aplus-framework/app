<?php namespace App\Commands;

use Framework\CLI\CLI;
use Framework\CLI\Command;
use Framework\Routing\Route;

class Routes extends Command
{
	protected string $name = 'routes';
	protected string $description = 'Show routes list.';
	protected string $usage = 'routes [options]';
	protected array $options = [
		'--order' => 'Order by column',
	];

	public function run(array $options = [], array $arguments = []) : void
	{
		$body = [];
		foreach (\App::router()->getRoutes() as $method => $routes) {
			foreach ($routes as $route) {
				/**
				 * @var Route $route
				 */
				$body[] = [
					$method,
					$route->getOrigin(),
					$route->getPath(),
					\is_string($route->getAction()) ? $route->getAction() : '{closure}',
					$route->getName() ?? '',
				];
			}
		}
		$index = $options['order'] ?? 1;
		\usort($body, static function ($str1, $str2) use ($index) {
			return \strcmp($str1[$index], $str2[$index]);
		});
		$titles = ['Method', 'Origin', 'Path', 'Action', 'Name'];
		$titles[$index] = CLI::style($titles[$index], CLI::FG_WHITE, null, ['bold']);
		CLI::table($body, $titles);
	}
}
