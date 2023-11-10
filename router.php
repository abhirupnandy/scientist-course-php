<?php

	$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

	$routes = [
	'/ai/' => 'controllers/index.php',
	'/ai/about' => 'controllers/about.php',
	'/ai/results' => 'controllers/results.php',
	'/ai/course' => 'controllers/course.php',
	'/ai/contact' => 'controllers/contact.php'
	];
	
	function abort($value = 404): void
	{
		http_response_code($value);
		require "controllers/{$value}.php";
		die();
	}
	
	function routeToController($uri, $routes): void
	{
		if ( array_key_exists($uri, $routes) ) {
			require $routes[$uri];
		} else {
			abort();
		}
	}

	routeToController($uri, $routes);
