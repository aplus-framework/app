<?php namespace App\Models;

use Framework\MVC\Model;

class Users extends Model
{
	protected $table = 'Users';
	protected $allowedColumns = [
		'email',
		'name',
	];
	protected $validationRules = [
		'email' => 'email',
		'name' => 'minLength:5|maxLength:32',
	];
	protected $useDatetime = true;
}
