<?php

/*
	All HTTP requests are routed to this class. It loads specific Controllers and methods passing 
	in parameters as necesary. It also handles default behavior for malicious requests.
	
	WARNING: Core file, altering this file may render the application unusable
*/

class Router extends Core {
	
	//store all routes
	private static $routes = array();
	
	//default controller
	public $controller;
	
	//default method
	public $method = 'index';
	
	//parameters
	public $parameters = array();
	
	//requested url
	public $request = '';
	
	//request URI
	public $requestURI = '';
	
	public $queryString = '';
	
	//server host
	public $host;
	
	//stores POST, GET, PUT, DELETE
	public $requestType;
	
	public static function addRoute(Route $route) {
		array_push(self::$routes, $route);
	}
	
	public function loadController() {
		
		//check that controller is set in the url
		if (isset($_SERVER['REQUEST_URI'])) {
			
			//store the request type
			$this->requestType = $_SERVER['REQUEST_METHOD'];
			
			//set the host information
			$this->host = $_SERVER['HTTP_HOST'];
			
			//store the request
			$this->request = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			
			//store the request URI
			$this->requestURI = $_SERVER['REQUEST_URI'];
			
			//query string
			$this->queryString = htmlentities($_SERVER['QUERY_STRING'], ENT_QUOTES);
			
			//if there is a stored route for this, use it
			if($this->_checkRoute($this->requestURI)){
				return true;
			}
			
			$route = Route::generateRoute($this->requestURI);
			
			if($route instanceof Route) {
				$this->controller = $route->getController();
				$this->method = $route->getMethod();
				$this->parameters = $route->getParameters();
				$this->load($route);
				return true;
			}
		}
		
		$this->e404();
	}	
	
	private function _checkRoute($request) {
		
		foreach(self::$routes as $route) {
			if ($route->getRoute() == $request){
				$this->redirect($route->getRedirect());
				return true;
			}
		}
		return false;
		
	}
	
	/*
	*	Load the Controller and method that was requested
	*/
	private function load() {
		
		$path = __CONTROLLERS . ucfirst($this->controller) . 'Controller.php';
		if (file_exists($path)){
			require_once($path);
		}else{
			$this->e404();
			return false;
		}
		
		//instantiate the controller
		$className = ucfirst($this->controller) . 'Controller';
		
		//Instantiate Controller and Persist it in an array
		$controller = new $className($this->Registry);
		
		
		//if(!$controller->enabled) {
			//Pass the request through the Access Control
			$this->Registry->ACL->handle($controller, $this->method, $this->parameters);
			return true;
		//}
		
		//Without ACL uncomment this
		/*
		$controller->runBefore();
		call_user_func_array(array($controller,  $this->method), $this->parameters);
		return true;
		*/
	}
	
	public function e404() {
		$this->Registry->Template->errorpage('404');
	}
	
	/**
	*	Constructs and Processes a new request based on the Controller/Method ($request)
	*	@param $request Array containing controller and method as keys
	*/
	public function redirect($request){
		
		if(is_array($request)){
			if(isset($request['controller']) && isset($request['method'])) {
				$params = '/';
				if(isset($request['parameters'])){
					foreach($request['parameters'] as $param) {
						$params .= $param . '/';
					}
					header('Location: http://' . $this->host . '/' . $request['controller'] . '/' . $request['method'] . $params);
					return true;
				}
				header('Location: http://' . $this->host . '/' . $request['controller'] . '/' . $request['method']);
				return true;
			}
		}else {
			header('Location: http://' . $this->host . '/' . $request);
		}
		$this->e404();
		return false;
	}

		
}



?>