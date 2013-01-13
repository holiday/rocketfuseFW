<?php 
	
	class PGSQLConnection implements Connection{

		public function getConnection($host, $dbName, $username, $password) {
			try {
				//Attempt to connect to the database
				return new PDO("pgsql:dbname={$dbname};host={$host}", $username, $password);
			}catch(PDOException $e) {
				throw new Exception($e);
			}
		}

	}

?>