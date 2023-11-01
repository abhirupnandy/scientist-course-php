<?php
	//	function to echo php version
	function php_version()
	{
		echo phpversion();
	}
	
	function dd($value)
	{
		echo '<pre>';
		var_dump($value);
		echo '</pre>';
		die();
	}

//	dd($_SERVER['REQUEST_URI']);
	
	function urlIs($value)
	{
		return $_SERVER['REQUEST_URI'] === $value;
	}
	
	function abort($value = 404)
	{
		http_response_code($value);
		require "controllers/{$value}.php";
		die();
	}
	
	function routeToController($uri, $routes)
	{
		if ( array_key_exists($uri, $routes) ) {
			require $routes[$uri];
		} else {
			abort();
		}
	}
	