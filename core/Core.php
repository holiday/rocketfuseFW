<?php

/*
*	This class provides base functionality for all Core files.
*/

abstract class Core {
	
	//Store a copy of the master Registry
	protected $registry;
	
	//Initialize a new core file with the Registry instance
	public function __construct($registry){
		$this->registry = $registry;
	}
	
}

?>