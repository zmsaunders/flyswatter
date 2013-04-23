<?php

// Flyswatter Routes

Route::controller(array(
	'flyswatter::home',
	'flyswatter::issue',
	'flyswatter::seed',
	'flyswatter::comment',
	'flyswatter::project',
));

View::share('flyswatter', '/'.Bundle::get('flyswatter')['handles']);
View::share('projects', \Flyswatter\Models\Project::all());
