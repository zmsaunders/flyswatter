<?php
use \Flyswatter\Models\Project as Project;
use \Flyswatter\Models\Issue as Issue;
use \Flyswatter\Models\Comment as Comment;

class testFlyswatterModels extends PHPUnit_Framework_TestCase {

	public function testIssues()
	{
		Bundle::start('flyswatter');
		// Seed Database
		Controller::call('flyswatter::seed@seed');
		$issue = Issue::find(1);
		$this->assertNotNull($issue->id);
	}
}
