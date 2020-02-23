<?php namespace App\Commands;

use Framework\CLI\CLI;
use Framework\Database\Extra\Migrator;

class MigrateUp extends AbstractMigration
{
	protected string $name = 'migrate:up';
	protected string $description = 'Run migrations up.';
	protected string $usage = 'migrate:up';

	protected function prepare()
	{
		parent::prepare();
		$this->description = $this->console->getLanguage()->render('migrations', 'runUp');
	}

	protected function migrate(Migrator $migrator) : void
	{
		foreach ($migrator->migrateUp() as $version) {
			CLI::write(
				$this->console->getLanguage()->render('migrations', 'migratedToVersion', [$version])
			);
		}
	}
}
