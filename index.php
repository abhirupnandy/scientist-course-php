<?php
	
	require 'functions.php';
//	require 'router.php';
	require 'Database.php';
	
	
	// connect to our database
//	class Person
//	{
//		public $name;
//		public $age;
//
//		public function breathe()
//		{
//			echo $this -> name . ' is breathing in and out';
//		}
//	}
//
//	$person = new Person();
//	$person -> name = 'John Doe';
//	$person -> age = 30;
//
//	$person -> breathe();

//	basic connection
//	$dsn = 'mysql:host=localhost;port=3306;dbname=my_app;charset=utf8mb4';
//	$pdo = new PDO($dsn, 'admin', 'admin@123');
//
//	$statement = $pdo -> prepare('SELECT * from POSTS');
//	$statement -> execute();
//
//	$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);
//
//	foreach ( $posts as $post ) {
//		echo "<li>" . $post['title'] . "</li>";
//	}

//  connect to database and execute a query
	
	$config = require 'config.php';
	
	$db = new Database($config['database'], 'admin', 'admin@123');
//	$posts = $db -> query("select * from posts where id > 1") -> fetch(PDO::FETCH_ASSOC);
	$posts = $db -> query("select * from posts") -> fetchAll(PDO::FETCH_ASSOC);
	
	//	foreach ( $posts as $post ) {
	//		echo "<li>" . $post['title'] . "</li>";
	//	}
	dd($posts);