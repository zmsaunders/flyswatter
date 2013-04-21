<?php namespace Flyswatter\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class Issue extends Eloquent{

	public function comments()
	{
		return $this->has_many('Flyswatter\Models\Comment');
	}

}
