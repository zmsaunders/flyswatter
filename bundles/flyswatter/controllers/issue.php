<?php
use \Flyswatter\Models\Project as Project;
use \Flyswatter\Models\Issue as Issue;

class Flyswatter_Issue_Controller extends Flyswatter_Base_Controller {

	/**
	 * View Issue
	 */
	public function get_view($id)
	{
		$issue = Issue::find($id);

		if( ! $issue )
			return Response::error('404');

		$view_data = array(
			'title' => $issue->summary,
			'issue' => $issue,
			'comments' => $issue->comments
		);

		return View::make('flyswatter::issue.view')->with($view_data);
	}

	/**
	 * Modify Issue
	 */
	public function put_view($id)
	{

	}

	/**
	 * Delete Issue
	 */
	public function delete_view($id)
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
		$input = Input::all();

		$rules = array(
			'summary'		=> 'required',
			'project'		=> 'required',
			'description'	=> 'required',
		);

		// Validate
		$validation = Validator::make($input, $rules);

		if ( $validation->fails() )
		{
			return Redirect::to_action('flyswatter::issue@new')->with_errors($validation);
		}

		else
		{
			$issue = new Issue;
			$issue->fill(array(
				'summary' => $input['summary'],
				'description' => $input['description'],
				'reporter'	=> 'test@example.com',
				'project_id'	=> $input['project']
			));

			$issue->save();

			return Redirect::to_action('flyswatter::issue@view', array($issue->id));
		}
	}
}
