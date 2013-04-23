<?php
use \Flyswatter\Models\Project as Project;
use \Flyswatter\Models\Issue as Issue;

class Flyswatter_Issue_Controller extends Flyswatter_Base_Controller {

	public function get_new()
	{
		$view_data = array(
			'title'		=> 'Create Issue'
		);

		return View::make('flyswatter::forms.new-issue')->with($view_data);
	}
}