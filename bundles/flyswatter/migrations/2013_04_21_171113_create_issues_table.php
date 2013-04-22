<?php

class Flyswatter_Create_Issues_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issues', function($table)
		{
			$table->increments('id');
			$table->integer('project_id');
			// Should use the following, but sqlite fails to alter the table with F keys
			// $table->foreign('project_id')->references('id')->on('projects');
			$table->text('summary');
			$table->text('description');
			$table->string('status', 100)->default('new');
			$table->string('reporter', 255);
			$table->string('owner', 255)->default('No One');
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
		Schema::drop('issues');
	}

}
