<?php
namespace core;

class Database {
	
	//will store the PDO object
	private static $instance;
	
	//credentials
	private static $ini;
	
	//registry instance
	private static $registry;
	
	public function __construct($registry) {
		self::$registry = $registry;
		
		//parse config.ini file
		self::$ini = parse_ini_file(__CORE . "config.ini", false);
	}
	
	public static function getInstance() {
		
		if (!isset(self::$instance)) {
			
			try {
				
				//get database info from config.php file, this allows the database info to be changed from one file 
				$host     = self::$ini['dbHost'];
				$database = self::$ini['dbName'];
				$user     = self::$ini['dbUser'];
				$pass     = self::$ini['dbPass'];
				
				self::$instance = new \PDO("mysql: host=$host; dbname=$database;", $user, $pass);
				self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				
			}catch(\PDOException $e) {
				//trigger the error message if connection problem occurs
				echo $e->getMessage();	
			}
		}
		return self::$instance;
	}
	
	//prevent cloning of this class
	private function __clone() {
	}
		
}


?>