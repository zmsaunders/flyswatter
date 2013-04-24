<?php

class testFlyswatterControllers extends PHPUnit_Framework_TestCase {

	/**
	 * Test controllers contain all relevent view data
	 */
	public function testControllersContainKeyData()
	{
		$this->assertArrayHasKey('projects', Controller::call('flyswatter::home@index')->content->data);
		$this->assertArrayHasKey('title', Controller::call('flyswatter::home@index')->content->data);
	}
}
