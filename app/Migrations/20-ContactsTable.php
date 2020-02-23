<?php namespace App\Migrations;

use Framework\Database\Definition\Table\TableDefinition;
use Framework\Database\Extra\Migration;

class ContactsTable extends Migration
{
	protected string $table = 'Contacts';

	public function up()
	{
		$this->database->createTable()
			->table($this->table)
			->definition(static function (TableDefinition $definition) {
				$definition->column('id')->int(11)->primaryKey()->autoIncrement();
				$definition->column('email')->varchar(255);
				$definition->column('name')->varchar(32);
				$definition->column('message')->varchar(1024);
				$definition->column('createdAt')->datetime();
				$definition->column('updatedAt')->datetime();
			})->run();
	}

	public function down()
	{
		$this->database->dropTable()
			->table($this->table)
			->ifExists()
			->run();
	}
}
