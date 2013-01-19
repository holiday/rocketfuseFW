<?php

/*
*	This class provides base functionality for all Core files.
*/

abstract class Core implements ICore{
	
	//Store a copy of the master Registry
	protected $App;
	
	//Initialize a new core file with the Registry instance
	public function __construct($app){
		$this->App = $app;
	}
	
}

?>