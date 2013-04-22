<?php
use \Flyswatter\Models\Project as Project;
use \Flyswatter\Models\Issue as Issue;
use \Flyswatter\Models\Comment as Comment;

class Flyswatter_Seed_Controller extends Flyswatter_Base_Controller {
	public function get_seed()
	{
		//Seed DB
		$project = new Project;
		$project->fill(array(
			'name'	=> 'Test Project Name',
			'description'	=> 'A test project to get started.'
		));
		$project->save();

		$issue = new Issue;
		$issue->fill(array(
			'summary' => "This is a sample issue",
			'description' => "This is a description of a sample issue. That's all.",
			'reporter'	=> 'test@example.com',
			'project_id'	=> $project->id
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
