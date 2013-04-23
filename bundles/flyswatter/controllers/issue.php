<?php
use \Flyswatter\Models\Project as Project;
use \Flyswatter\Models\Issue as Issue;

class Flyswatter_Issue_Controller extends Flyswatter_Base_Controller {

	/**
	 * View Issue
	 */
	public function get_index($issue)
	{

	}

	/**
	 * Modify Issue
	 */
	public function put_index($issue)
	{

	}

	/**
	 * Delete Issue
	 */
	public function delete_index($issue)
	{

	}

	/**
	 * Display New Issue form
	 */
	public function get_new()
	{
		$view_data = array(
			'title'		=> 'Create Issue'
		);

		return View::make('flyswatter::forms.issue')->with($view_data);
	}

	/**
	 * Add new issue
	 */
	public function post_new()
	{

	}
}
