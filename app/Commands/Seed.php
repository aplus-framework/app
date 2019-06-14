<?php namespace App\Commands;

use App\Seeds\Seeder;
use Framework\CLI\Command;

class Seed extends Command
{
	protected $name = 'seed';
	protected $description = 'Seed database.';
	protected $usage = 'seed';

	public function run(array $options = [], array $arguments = []) : void
	{
		(new Seeder(\App::getDatabase()))->run();
	}
}
