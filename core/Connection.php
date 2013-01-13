<?php 
	
	/*
	*	PDO Connection Interface, implement this if you want to provide
	*	your own DB service
	*/

	interface Connection {
		public function getConnection();
	}

?>