<?php

class Route {
	
	//controller name
	private $controller = null;
	
	//controller method name
	private $method = 'index';
	
	//optional parameters to be passed to controller method
	private $parameters = array();
	
	//path requested
	private $path = '';
	
	/**
	*	Initialize a new Route
	*/	
	public function __construct() {
		
	}
	
	public static function create() {
		return new self();//instantiate a new static Route
	}
	
	/**
	*	Return the String name of this Route's Controller
	*/
	public function getController(){
		return $this->controller;
	}
	
	/**
	*	Return the String name of this Route's Method
	*/
	public function getMethod(){
		return $this->method;
	}
	
	/**
	*	Return the Array of parameters pertaining to this Route
	*/
	public function getParameters(){
		return $this->parameters;
	}
	
	/**
	*	Return the route/path of the Http Request
	*/
	public function getRoute() {
		return $this->path;
	}
	
	/**
	*	Return an Array containing only the data needed for an Http Redirect i.e. controller, method and parameters (optional)
	*/
	public function getRedirect(){
		return array('controller' => $this->controller, 'method' => $this->method, 'parameters' => $this->parameters);
	}
	
	/**
	*	Setter for the path
	*/
	public function setPath($path='') {
		$this->path = $path;
		return $this;
	}

	/**
	*	Getter for the path
	*/
	public function getPath() {
		return $this->path;
	}
	
	/**
	*	Setter for the Controller name. Throws 
	*/
	public function setController($controller=null) {
		if(!$controller) {
			//exception is thrown as Controller is required
			throw new Exception('Invalid Route, Controller is not defined.');
		}
		
		$this->controller = $controller;
		return $this;
	}
	
	/**
	*	Setter for the Controller method
	*/
	public function setMethod($method='index') {
		$this->method = $method;
		return $this;
	}
	
	public function setParameters($parameters=array()){
		$this->parameters = $parameters;
		return $this;
	}
	
	public static function generateRoute($requestURI) {
		$parts = explode('/', $requestURI);
		
		//remove the blank created
		array_shift($parts);
		
		//if the controller exists in the request
		if(isset($parts[0]) && $parts[0] != null && $parts[0] != '') {
			
			$controller = $parts[0];
			
			if(isset($parts[1]) && $parts[1] != '' && $parts[1] != null){
				$method = $parts[1];
			}else{
				$method = 'index';
			}
			//set the parameters if there are any
			$params = array_slice($parts, 2);
			$params = array_merge($params, array_values($_GET));

			//print_r($params);
			
			return Route::create()->setController($controller)->setMethod($method)->setParameters($params)->setPath('/' . $controller . '/' . $method);
		}
		//bad request
		return false;
	}
	
	public function equals(Route $route) {
		if($route instanceof Route) {
			return $route->getPath() == $this->getPath();
		}else {
			throw new Exception('equals() failed, parameter is not of type Route');
		}
	}

	public function toString() {
		return "Routing request: '" . $this->path . "' to controller => " . $this->controller . " and method => " . $this->method;
	}
	
}

?>