<?php
	
	class Database
	{
		public $connection;
		
		public function __construct($config, $username, $password)
		{
			
			$dsn = 'mysql:' . http_build_query($config, arg_separator: ';');

//			$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
			$this -> connection = new PDO($dsn, $username, $password, [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);
		}
		
		public function query($query, $params = [])
		{
//			$dsn = 'mysql:host=localhost;port=3306;dbname=my_app;charset=utf8mb4';
//			$pdo = new PDO($dsn, 'admin', 'admin@123');
			
			$statement = $this -> connection -> prepare($query);
			$statement -> execute($params);

//			return $statement -> fetchAll(PDO::FETCH_ASSOC);
			
			return $statement;
		}
	}