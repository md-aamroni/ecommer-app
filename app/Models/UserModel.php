<?php

namespace App\Models;

use App\Eloquent\EloquentORM;

class UserModel extends EloquentORM
{
	protected $table;
	protected $order;

	protected function allUsers()
	{
		$this->table = 'users';
		$this->order = false;
		return $this->all($this->table, $this->order);
	}
}
