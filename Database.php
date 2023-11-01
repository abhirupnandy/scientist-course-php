<?php
	
	class Database
	{
		public $connection;
		
		public function __construct()
		{
			$dsn = 'mysql:host=localhost;port=3306;dbname=my_app;charset=utf8mb4';
			$this -> connection = new PDO($dsn, 'admin', 'admin@123');
		}
		
		public function query($query)
		{
//			$dsn = 'mysql:host=localhost;port=3306;dbname=my_app;charset=utf8mb4';
//			$pdo = new PDO($dsn, 'admin', 'admin@123');
			
			$statement = $this -> connection -> prepare($query);
			$statement -> execute();

//			return $statement -> fetchAll(PDO::FETCH_ASSOC);
			
			return $statement;
		}
	}