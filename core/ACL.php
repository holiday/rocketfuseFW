<?php

class ACL extends Core {
	
	/**
	*	Handles Sitewide Requests to controllers. Blocks requests based on Controller settings.
	*	ACL must be turned on in the Controller for access restrictions to work.
	*/
	public function handle($controller, $method, $params){
		
		$className = ucfirst($controller) . 'Controller';
		$controller = new $className($this->Registry);
		
		if($this->aclEnabled($controller)){
			$allowedMethods = $controller->allowed;
			
			foreach($allowedMethods as $allowedMethod){
				if(strtolower(trim($method)) == strtolower(trim($allowedMethod))) {
					//call the runBefore method that every controller has
					$controller->runBefore();
					//call the action and pass it any parameters
					call_user_func_array(array($controller,  $method), $params);
					return true;
				}
			}
			//deny access to the page since the request has been blocked
			$this->denied();
			return false;
		}
		//call the runBefore method that every controller has
		$controller->runBefore();
		//call the action and pass it any parameters
		call_user_func_array(array($controller,  $method), $params);
		return true;
	}
	
	public function aclEnabled($controller){
		if(isset($controller->ACL)){
			return $controller->ACL;
		}
		return false;
	}
	
	public function denied(){
		$this->Registry->Template->errorpages('404');
	}
	
}

?>