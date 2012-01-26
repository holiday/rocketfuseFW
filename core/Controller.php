<?php

/*
	Provides base functionality for all controllers. All controllers must extends this class
	to be accessible. Adding functionality to this controller will affect each controller 
	that extends from this class.
	
	WARNING: Altering the code provided already will cause your application to break
	
*/

namespace core;

class Controller {
	
	//Main component provider
	public $App;
	
	/*
	*	Initializes a controller with the Registry object
	*/
	public function __construct($registry) {
		$this->App = $registry;
	}
	
	public function __call($fnName, $fnArgs = null) {
		
		
		//if the action is not callable then default it to index
		if(method_exists($this, $fnName)) {
			
			$ref = new \ReflectionMethod($this, $fnName);
			$numParams = $ref->getNumberOfParameters();
			
			//extract the parameters and pass it to the function
			$params = array_slice($fnArgs, 0, $numParams);
			
			//call the function
			call_user_func_array(array(get_class($this), $fnName), $params);
		}else {
			//fix this, throw proper exception instead
			echo "404: PAGE NOT FOUND";
		}
	}
	

}

?>