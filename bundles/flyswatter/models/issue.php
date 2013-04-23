<?php namespace Flyswatter\Models;
use \Laravel\Database\Eloquent\Model as Eloquent;

class Issue extends Eloquent{

	public static $table = 'flyswatter_issues';

	public function comments()
	{
		return $this->has_many('Flyswatter\Models\Comment');
	}

}
