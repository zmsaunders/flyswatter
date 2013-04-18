<?php

class Flyswatter_Home_Controller extends Flyswatter_Base_Controller {

	public function get_index()
	{
		$view_data = array(
			'title'	=> 'Dashboard'
		);
		return View::make('flyswatter::dashboard.start')->with($view_data);
	}
}
