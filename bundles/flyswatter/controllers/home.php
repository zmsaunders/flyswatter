<?php
use \Flyswatter\Models\Issue as Issue;
use \Flyswatter\Models\Comment as Comment;

class Flyswatter_Home_Controller extends Flyswatter_Base_Controller {

	public function get_index()
	{
		$view_data = array(
			'title'	=> 'Dashboard',
			'issues'	=> Issue::all()
		);

		// var_dump(Comment::all());

		return View::make('flyswatter::dashboard.start')->with($view_data);
	}

	public function get_seed()
	{
		//Seed DB
		$issue = new Issue;
		$issue->fill(array(
			'summary' => "This is a sample issue",
			'description' => "This is a description of a sample issue. That's all.",
			'reporter'	=> 'test@example.com'
		));

		$issue->save();

		$comment = new Comment;
		$comment->fill(array(
			'issue_id' => $issue->id,
			'comment' => 'This is a comment',
			'commentor' => 'test@example.com'
		));

		$comment->save();

		$comment = new Comment;
		$comment->fill(array(
			'issue_id' => $issue->id,
			'comment' => 'This is another comment',
			'commentor' => 'test@example.com'
		));

		$comment->save();
	}
}
