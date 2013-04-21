<?php

Autoloader::map(array(
    'Flyswatter_Base_Controller' => Bundle::path('flyswatter').'controllers/base.php',
));

Autoloader::namespaces(array(
	'Flyswatter\Models' => Bundle::path('flyswatter').'models',
));
