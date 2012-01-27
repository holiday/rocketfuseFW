<?php

class Registry {
		
	private static $vars = array();
	
	private $instance;
	
	public function __construct() {
	}
	
	public static function instance() {
		
		if (!isset(self::$instance)) {
			$class = __CLASS__;
			self::$instance = new $class;	
		}

		return self::$instance;
			
	}
	
	//prevent cloning of the registry
	public function __clone() {
		throw new Exception ('Cloning Registry is not permitted');
	}
	
	public function __set($k, $v) {
		self::$vars[$k] = $v;
	}
	
	public function __get($k) {
		return self::$vars[$k];	
	}
	
}

?>