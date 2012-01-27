<?php

/*
	Template handles loading specific views associated with the current Controller. It is also responsible
	for loading in page attributes into views.
*/

class Template {

	private $registry;
	
	public $vars = array();
	
	public function __construct($registry) {
		$this->registry = $registry;	
	}
	
	/*
	*	Magic Setter for dynamic variables
	*/
	
	public function __set($k, $v) {
		$this->vars[$k] = $v;	
	}
	
	/*
	*	Includes the requested HTML view pertaining to the current controller
	*	@param view String name of the html file
	*/
	public function render($view) {
		
		//if a controller was not specified then it is assumed the controller is the current one
		if(!isset($controller)) {
			$controller = $this->registry->Router->controller;
		}
		
		//Look in the application/views/controller for the view
		$path = __VIEWS . $this->registry->Router->controller . DS . $view . '.php';

		//keys will become variables
		extract($this->vars);
		
		//check both the view directory and also check within the admin directory for the admin file
		if(is_readable($path)) {
			//include the view file
			include $path;
			return true;
		}else {
			throw new Exception ('Could not find view ' . $view, E_USER_ERROR);
			return false;
			
		}
			
	}
	
	
}

?>