<?php

class ACL extends Core {
	
	
	//Controllers that are allowed
	public static $allowedControllers = array();
	
	//Methods that are allowed for a specific controller
	public static $allowedControllerMethods;
	
	
	/**
	*	Handles Sitewide Requests to Controllers. Blocks requests based on Controller settings.
	*	ACL must be turned on in the Controller for access restrictions to work. Failure
	*	to set the 'allow' attribute in the Controller will block all requests to that Controller.
	*/
	public function handle($controller, $method, $params) {
		
		if(!isset($controller->allow)){
			$this->e404();
			return false;
		}
		
		if(is_array($controller->allow)){
			if(empty($controller->allow)){
				$this->e404();
				return false;
			}
		}
		
		if(self::_isControllerMethodAllowed($controller, $method)) {
			//call the runBefore method that every controller has
			$controller->runBefore();
			//call the action and pass it any parameters
			call_user_func_array(array($controller,  $method), $params);
			return true;
		}
		$this->e404();
		return false;
	}
	
	public static function addController(Controller $controller) {
		array_push($this->allowedControllers, $controller);
	}
	
	private static function _isControllerMethodAllowed($controller, $method) {
		foreach($controller->allow as $allowed) {
			if(strtolower(trim($method)) == strtolower(trim($allowed))) {
				return true;
			}
		}
		return false;
	}
	
	private static function _isControllerAllowed($controller) {
		foreach(self::$allowedControllers as $allowedController) {
			if($controller == $allowedController) {
				return true;
			}
		}
		return false;
	}
	
	public function e404(){
		$this->Registry->Template->errorpage('404');
	}
	
}

?>