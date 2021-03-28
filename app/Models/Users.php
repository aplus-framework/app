<?php namespace App\Models;

use App\Entities\User;
use Framework\MVC\Model;

/**
 * Class Users.
 *
 * @method User|null find($primary_key)
 * @method false|User create($data)
 * @method false|User update($primary_key, $data)
 * @method false|User save($data)
 * @method false|User replace($primary_key, $data)
 */
class Users extends Model
{
	protected ?string $table = 'Users';
	protected array $allowedColumns = [
		'email',
		'name',
	];
	protected array $validationRules = [
		'email' => 'email',
		'name' => 'minLength:5|maxLength:32',
	];
	protected bool $useDatetime = true;
	protected string $returnType = User::class;
}
