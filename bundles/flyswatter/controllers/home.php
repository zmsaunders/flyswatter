<?php
use \Flyswatter\Models\Project as Project;
use \Flyswatter\Models\Issue as Issue;
use \Flyswatter\Models\Comment as Comment;

class Flyswatter_Home_Controller extends Flyswatter_Base_Controller {

	public function get_index()
	{
		$view_data = array(
			'title'	=> 'Dashboard',
			'projects' => Project::all()
		);

		// var_dump(Comment::all());

		return View::make('flyswatter::dashboard.start')->with($view_data);
	}

}
