<?php
	function urlIs($value): bool
	{
		return $_SERVER['REQUEST_URI'] === $value;
	}

//	function to check if the get variable is set
	function postIsSet($value): bool
	{
		return isset($_POST[$value]);
	}