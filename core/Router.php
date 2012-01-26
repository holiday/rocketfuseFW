<?php

/*
	All HTTP requests are routed to this class. It loads specific Controllers and methods passing 
	in parameters as necesary. It also handles default behavior for malicious requests.
	
	WARNING: Core file, altering this file may render the application unusable
*/

namespace core;

class Router {
	
	private $registry;
	
	//default controller
	public $controller = 'index';
	//default method
	public $method = 'index';
	
	//parameters
	public $parameters = array();
	
	function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function loadController() {
		
		//check that controller is set in the url
		if (isset($_SERVER['PATH_INFO'])) {
			
			//separate the controller from the method
			$parts = explode('/', $_SERVER['PATH_INFO']);
			
			//controller is not empty
			if (!empty($parts[1])) {
				
				//validate the controller to see if it exists
				if (file_exists(__CONTROLLERS . ucfirst($parts[1]) . 'Controller.php')) {
					
					//set the controller and its method
					$this->controller = $parts[1];
					
					//only set the method if it has been set
					if (isset($parts[2])) {
						$this->method = $parts[2];
					}
					
					//set the parameters if there are any
					$params = array_slice($parts, 2);
					if(!empty($params)) {
						$this->parameters = $params;
					}
				}
			}
		}
		
		//load the controller
		$this->load();
	}	
	
	/*
	*	Load the Controller and method that was requested
	*/
	private function load() {
		
		//Setup the path to the controller eg. application/IndexController (i.e. first letter of controller capitalized)
		$loc1 = __CONTROLLERS . ucfirst($this->controller) . 'Controller.php';
		
		//require the controller file
		require_once($loc1);
		
		$className = ucfirst($this->controller) . 'Controller';
		$controller = new $className($this->registry);
		
		//call the action and pass it any parameters
		$controller->__call($this->method, $this->parameters);
	}
		
}



?>