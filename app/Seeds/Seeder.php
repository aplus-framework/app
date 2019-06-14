<?php namespace App\Seeds;

use Framework\CLI\CLI;

class Seeder extends \Framework\Database\Extra\Seeder
{
	public function run()
	{
		$is_cli = is_cli();
		foreach ($this->getSeeds() as $seed) {
			if ($is_cli) {
				CLI::write("Seeding {$seed}");
			}
			$this->call($seed);
		}
	}

	protected function getSeeds() : array
	{
		return [
			Users::class,
		];
	}
}
