<?php
	
	require 'functions.php';
//	require 'router.php';
	
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
	
	$dsn = 'mysql:host=localhost;port=3306;dbname=my_app;charset=utf8mb4';
	$pdo = new PDO($dsn, 'admin', 'admin@123');
	
	$statement = $pdo -> prepare('SELECT * from POSTS');
	$statement -> execute();
	
	$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);
//	dd($posts);
	foreach ( $posts as $post ) {
		echo "<li>" . $post['title'] . "</li>";
	}
	