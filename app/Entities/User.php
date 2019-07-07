<?php namespace App\Entities;

use Framework\MVC\Entity;

/**
 * Class User.
 *
 * @property int            $id
 * @property string         $email
 * @property string         $name
 * @property \DateTime|null $createdAt
 * @property \DateTime|null $updatedAt
 */
class User extends Entity
{
	protected $id;
	protected $email;
	protected $name;
	protected $createdAt;
	protected $updatedAt;

	protected function setCreatedAt($createdAt) : void
	{
		$this->createdAt = $this->fromDateTime($createdAt);
	}

	protected function setUpdatedAt($updatedAt) : void
	{
		$this->updatedAt = $this->fromDateTime($updatedAt);
	}
}
