<?php
	
	$config = require 'config.php';
	$db = new Database($config['database'], 'admin', 'admin@123');
	
	$heading = 'My Notes';
	
	$notes = $db -> query('SELECT * FROM my_app.notes WHERE user_id =2') -> fetchAll();

//	dd($notes);

//	dd($_SERVER['REQUEST_URI']);
//	require 'functions.php';
	require 'views/notes.view.php';