<?php

class Route {
	
	private $controller;
	
	//default to index view
	private $method = 'index';
	
	private $parameters = array();
	
	private $route;
	
	private $options;
	
	public function __construct($route, $options) {
		$this->route = $route;
		$this->options = $options;
		$this->setController($options);
		$this->setMethod($options);
		$this->setParameters($options);
	}
	
	public function getController(){
		return $this->controller;
	}
	
	public function getMethod(){
		return $this->method;
	}
	
	public function getParameters(){
		return $this->parameters;
	}
	
	public function getRoute() {
		return $this->route;
	}
	
	public function getRedirect(){
		return array('controller' => $this->controller, 'method' => $this->method, 'parameters' => $this->parameters);
	}
	
	public function setController($ops) {
		if(isset($ops['controller'])) {
			$this->controller = $ops['controller'];
			return true;
		}
		throw new Exception('Invalid Route, controller is not defined.');
	}
	
	public function setMethod($ops) {
		if(isset($ops['method'])){
			$this->method = $ops['method'];
			return true;
		}
		return false;
	}
	
	public function setParameters($ops){
		if(isset($ops['parameters'])) {
			$this->parameters = $ops['parameters'];
			return true;
		}
		return false;
	}
	
	public static function generateRoute($request) {
		$parts = explode('/', $request);
		array_shift($parts);
		if(isset($parts[0])) {
			$controller = $parts[0];
			if(isset($parts[1])){
				$method = $parts[1];
			}else{
				$method = 'index';
			}
			//set the parameters if there are any
			$params = array_slice($parts, 2);
			return new Route($request, array('controller' => $controller, 'method' => $method, 'parameters' => $params));
		}
		//invalid request
		return false;
	}
	
	public function toString() {
		return "Routing request: '" . $this->route . "' to controller => " . $this->controller . " and method => " . $this->method;
	}
	
}

?>