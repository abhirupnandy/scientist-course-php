<?php
	$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//	dd(parse_url($uri));
	
	$routes = [
		'/' => 'controllers/index.php',
		'/about' => 'controllers/about.php',
		'/contact' => 'controllers/contact.php'
	];
	
	
	routeToController($uri, $routes);