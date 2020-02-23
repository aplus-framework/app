<?php namespace App\Commands;

use Framework\CLI\CLI;
use Framework\CLI\Command;
use Framework\CLI\Console;
use Framework\Database\Extra\Migrator;

abstract class AbstractMigration extends Command
{
	protected array $options = [
		'-l, --list' => 'List files.',
		'-y, --yes' => 'Proceed migration without prompt.',
	];

	public function __construct(Console $console)
	{
		parent::__construct($console);
		$this->prepare();
	}

	protected function prepare()
	{
		$this->active = \App::getConfig('console')['defaults'] ?? true;
		$this->options['-l, --list'] = $this->console->getLanguage()
			->render('migrations', 'listFiles');
		$this->options['-y, --yes'] = $this->console->getLanguage()
			->render('migrations', 'noPrompt');
	}

	public function run(array $options = [], array $arguments = []) : void
	{
		$migrator = new Migrator(\App::getDatabase(), \App::getLocator());
		$this->showCurrentVersion($migrator);
		$migrator->addFiles(
			\App::getLocator()->getFiles('Migrations')
		);
		if (isset($options['l'])) {
			$this->listFiles($migrator);
		}
		if ( ! isset($options['y']) && ! $this->prompt()) {
			return;
		}
		$this->migrate($migrator);
		CLI::write($this->console->getLanguage()->render('migrations', 'migrationSucceed'));
		$this->showCurrentVersion($migrator);
	}

	abstract protected function migrate(Migrator $migrator) : void;

	protected function showCurrentVersion(Migrator $migrator) : void
	{
		CLI::write(
			$this->console->getLanguage()
				->render('migrations', 'currentVersion', [$migrator->getCurrentVersion()])
		);
	}

	protected function listFiles(Migrator $migrator) : void
	{
		CLI::write(
			$this->console->getLanguage()->render('migrations', 'filesFound')
		);
		foreach ($migrator->getFiles() as $version => $file) {
			CLI::write(" {$version} - {$file}");
		}
	}

	protected function prompt() : bool
	{
		$prompt = CLI::prompt(
			$this->console->getLanguage()->render('migrations', 'proceedMigration'),
			['n', 'y']
		);
		if ($prompt !== 'y') {
			CLI::write(
				$this->console->getLanguage()->render('migrations', 'migrationAborted')
			);
			return false;
		}
		return true;
	}
}
