<?php

include_once 'util.php';

class DBConnector{

	protected $pdo;


	function __construct(){

		//data source
		$dsn="mysql:host=".utility::$server_name.";dbname=".utility::$db_name."";

		$options=[

              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES => false,
              PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
		];

		//store database connection in a variable
		try{
			 $this->pdo=new PDO($dsn,utility::$username,utility::$password, $options);	
		}
		catch(PDOEXCEPTION $e){

		 echo $e->getMessage();
		}
	}
	//method that returns database connection 
	public function connectToDB(){
		return $this->pdo;
	}

	public function closeDB(){

		 $this->pdo=NULL;
	}
}



?>