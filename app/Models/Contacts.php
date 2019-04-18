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
	protected $validationLabels = [
		'email' => 'Email',
		'name' => 'Name',
		'message' => 'Message',
	];
	protected $validationRules = [
		'email' => 'email',
		'name' => 'latin:true|minLength:5|maxLength:32',
		'message' => 'required|minLength:10|maxLength:1024',
	];
}
