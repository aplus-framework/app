<?php namespace App\Models;

use Framework\MVC\Model;

class Contacts extends Model
{
	protected array $allowedColumns = [
		'email',
		'name',
		'message',
	];
	protected bool $useDatetime = true;
	protected array $validationLabels = [
		'email' => 'Email',
		'name' => 'Name',
		'message' => 'Message',
	];
	protected array $validationRules = [
		'email' => 'required|email',
		'name' => 'required|minLength:5|maxLength:32',
		'message' => 'required|minLength:10|maxLength:1024',
	];

	public function __construct()
	{
		$this->validationLabels = [
			'email' => lang('contact.email'),
			'name' => lang('contact.name'),
			'message' => lang('contact.message'),
		];
	}
}
