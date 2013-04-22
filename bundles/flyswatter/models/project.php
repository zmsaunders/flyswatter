<?php namespace Flyswatter\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class Project extends Eloquent {
	public function issues()
	{
		return $this->has_many('Flyswatter\Models\Issue');
	}
}
