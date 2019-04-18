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
		'name' => 'latin:true|minLength:5|maxLength:32',
	];
}
