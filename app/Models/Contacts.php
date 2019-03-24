<?php namespace App\Models;

use Framework\MVC\Model;

class Contacts extends Model
{
	protected $allowedColumns = [
		'email',
		'name',
		'message',
	];
	protected $useDatetime = true;
}
