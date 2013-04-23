<?php

// Flyswatter Routes

Route::controller(array(
	'flyswatter::home',
	'flyswatter::issue',
	'flyswatter::seed',
));

// LIKE A BOSS
$rendered_views = array(
	'flyswatter::forms.new-issue',
);
View::composer($rendered_views, function($view){
	$view->nest('side_nav', 'flyswatter::layouts.project-nav', array('projects' => \Flyswatter\Models\Project::all()));
});
