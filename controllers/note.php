<?php
	
	$config = require 'config.php';
	$db = new Database($config['database'], 'admin', 'admin@123');
	
	$heading = 'Note';
//	dd($_GET['id']);
	$id = $_GET['id'];
	
	$note = $db -> query('SELECT * FROM my_app.notes WHERE id = :id', ['id' => $id]) -> fetch();
//	dd($notes);

//	dd($_SERVER['REQUEST_URI']);
//	require 'functions.php';
	require 'views/note.view.php';