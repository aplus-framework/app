<?php namespace App\Seeds;

use App\Models\Users as UsersModel;
use Framework\Database\Extra\Seeder;

class Users extends Seeder
{
	protected $count = 100;

	public function run()
	{
		$faker = \Faker\Factory::create();
		$users = new UsersModel();
		for ($i = 1; $i <= $this->count; $i++) {
			$user = $users->create([
				'email' => $faker->email,
				'name' => $faker->name,
			]);
			if ( ! $user) {
				throw new \Exception(
					"User {$i} was not created: "
					. \print_r($users->getErrors(), true)
				);
			}
		}
	}
}
