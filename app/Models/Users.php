<?php namespace App\Models;

use Framework\MVC\Model;

class Users extends Model
{
	protected $table = 'Users';
	protected $allowedColumns = [
		'email',
		'name',
	];
}
