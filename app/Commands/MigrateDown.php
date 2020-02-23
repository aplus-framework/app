<?php namespace App\Commands;

use Framework\CLI\CLI;
use Framework\Database\Extra\Migrator;

class MigrateDown extends AbstractMigration
{
	protected string $name = 'migrate:down';
	protected string $description = 'Run migrations down.';
	protected string $usage = 'migrate:down';

	protected function prepare()
	{
		parent::prepare();
		$this->description = $this->console->getLanguage()->render('migrations', 'runDown');
	}

	protected function migrate(Migrator $migrator) : void
	{
		foreach ($migrator->migrateDown() as $version) {
			CLI::write(
				$this->console->getLanguage()->render('migrations', 'migratedToVersion', [$version])
			);
		}
	}
}
