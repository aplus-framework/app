<?php namespace App\API;

use App\Models\Users as UsersModel;
use Framework\MVC\ResourceController;

class Users extends ResourceController
{
	/**
	 * @var UsersModel
	 */
	protected $users;

	public function __construct(...$params)
	{
		parent::__construct(...$params);
		$this->users = new UsersModel();
	}

	public function index()
	{
		$this->respondOK([
			'method' => __METHOD__,
		]);
	}

	public function create()
	{
		$user = $this->users->create($this->request->getPOST());
		if ($user) {
			$this->response->setHeader('Location', $user->id);
			return $this->respondCreated($user);
		}
		//$errors = $this->users->getErrors();
		$errors = [
			'foo' => 'Field foo is not allowed',
		];
		return $this->respondBadRequest($errors);
	}

	public function show(int $id)
	{
		$user = $this->users->find($id);
		return $user
			? $this->respondOK($user)
			: $this->respondNotFound([
				'message' => '404 User Not Found',
			]);
	}

	public function update(int $id)
	{
		$user = $this->users->find($id);
		if ( ! $user) {
			return $this->respondNotFound([
				'message' => '404 User Not Found',
			]);
		}
		$updated = $this->users->update($id, $this->request->getBody(true));
		return $updated
			? $this->respondOK($updated)
			: $this->respondBadRequest([
				'error' => 'Bad Request',
				'messages' => [// $this->users->getErrors();
					'Field foo is required',
					'Field bar is required',
				],
			]);
	}

	public function replace(int $id)
	{
		return $this->respondOK();
	}

	public function delete(int $id)
	{
		return $this->respondNoContent();
	}
}
