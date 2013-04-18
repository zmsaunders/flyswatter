<?php

class Flyswatter_Base_Controller extends Controller {

	public $restful 	= TRUE;

	public function __construct()
	{
		parent::__construct();

		// Bootstrap CSS Framework
		Asset::container('header')->bundle('flyswatter');
		Asset::container('header')->add('bootstrap', 'css/bootstrap.min.css');

		// jQuery & Bootstrap JS Frameworks
		Asset::container('footer')->bundle('flyswatter');
		Asset::container('footer')->add('jquery', 'http://code.jquery.com/jquery-latest.min.js');
        Asset::container('footer')->add('bootstrapjs', 'js/bootstrap.min.js');
	}

	/**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string    $method
     * @param  array     $parameters
     * @return Response
	 */
	public function __call($method, $parameters){
		return Response::error('404');
	}
}
