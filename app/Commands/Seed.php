<?php namespace App\Commands;

use App\Seeds\Seeder;
use Framework\CLI\Command;

class Seed extends Command
{
	protected string $name = 'seed';
	protected string $description = 'Seed database.';
	protected string $usage = 'seed';

	public function run(array $options = [], array $arguments = []) : void
	{
		(new Seeder(\App::database()))->run();
	}
}
