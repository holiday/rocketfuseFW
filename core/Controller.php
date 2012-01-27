<?php

/**
*	Provides base functionality for all controllers. All controllers must extends this class
*	to be accessible. Adding functionality to this controller will affect each controller 
*	that extends from this class.
*	
*/

class Controller{
	
	//Stores the Registry
	public $App;
	
	/**
	*	Initializes a controller with the Registry object
	*	@param $registry Registry 
	*/
	public function __construct($registry) {
		$this->App = $registry;
	}
	
	
	/**
	*	Magic method that is used to call methods defined in this Class by its String $fnName with optional 
	*	parameters Array $fnArgs
	*	@param $fnName method name
	*	@param $fnArgs method parameters
	*/
	public function __call($fnName, $fnArgs = null) {
		
		//if the action is not callable then default it to index
		if(method_exists($this, $fnName)) {
			
			$ref = new ReflectionMethod($this, $fnName);
			$numParams = $ref->getNumberOfParameters();
			
			//extract the parameters and pass it to the function
			$params = array_slice($fnArgs, 0, $numParams);
			
			//call the function
			call_user_func_array(array(get_class($this), $fnName), $params);
		}else {
			//FIXXX THIS, it should show a useful error
			throw new Exception('Sorry the page you requested does not exist.');
		}
	}
	

}

?>