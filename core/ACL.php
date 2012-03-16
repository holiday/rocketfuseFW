<?php

class ACL extends Core {
	
	//Methods that are allowed for a specific controller
	public static $allowedControllerMethods;
	
	
	/**
	*	Handles Sitewide Requests to Controllers. Blocks requests based on Controller settings.
	*	ACL must be turned on in the Controller for access restrictions to work. Failure
	*	to set the 'allow' attribute in the Controller will block all requests to that Controller.
	*/
	public function handle($controller, $method, $params) {
		
		//when to give a 404 error
		if(!$controller->enabled || !isset($controller->allow) || (is_array($controller->allow) && empty($controller->allow))){
			$this->e404();
			return false;
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
	
	private static function _isControllerMethodAllowed($controller, $method) {
		foreach($controller->allow as $allowed) {
			if(strtolower(trim($method)) == strtolower(trim($allowed))) {
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