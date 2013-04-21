<?php

class Flyswatter_Create_Comments_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table)
		{
			$table->increments('id');
			$table->integer('issue_id');
			// Should use the following, but sqlite fails to alter the table with F keys
			// $table->foreign('issue_id')->references('id')->on('issues');
			$table->text('comment');
			$table->string('commentor', 255);
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
