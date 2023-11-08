<?php
	
	use JetBrains\PhpStorm\NoReturn;
	
	$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//	dd(parse_url($uri));
	
	$routes = [
		'/' => 'controllers/index.php',
		'/about' => 'controllers/about.php',
		'/notes' => 'controllers/notes.php',
		'/note' => 'controllers/note.php',
		'/contact' => 'controllers/contact.php'
	];
	
	#[NoReturn] function abort($value = 404): void
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