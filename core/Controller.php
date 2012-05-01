<?php

/**
*	Provides base functionality for all controllers. All controllers must extends this class
*	to be accessible. Adding functionality to this controller will affect each controller 
*	that extends from this class. Controllers are singleton, multiple instantiation is prevented.
*	
*/

class Controller{
	
	public $App;
	
	//enables this controller or disables it, by default it is enabled
	public $enabled = true;
	
	//stored an array of String method names
	public $allow = array('index');
	
	//whether to make this controller accessible 
	public $visible = true;

	public function __construct($registry) {
		$this->App = $registry;
	}
	
	public function index() {
		//default method called if none is specified
	}
	
	/**
	*	Method that is called before any other method
	*/
	public function runBefore(){
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
			//render a 404 error
			$this->App->Template->errorpage('404');
		}
	}
	
	/**
	*	Return an array of Strings of method names that are allowed access
	*/
	public function getAllowedMethods(){
		return $this->allowed;
	}
}

?>