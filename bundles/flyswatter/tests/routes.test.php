<?php

class testFlyswatterRoutes extends PHPUnit_Framework_TestCase {

	public function testRouteResolution()
	{
		Bundle::start('flyswatter');
		$this->assertEquals('flyswatter::home@index', Router::route('GET', Bundle::get('flyswatter')['handles'])->action['uses']);
	}
}
