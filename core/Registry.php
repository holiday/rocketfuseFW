<?php

/* 
*	The Registry class is a singleton that serves as a bootstrapper for 
*	the core framework files. Specifically Router and Template managers.
*
*	NOTICE: This file should not be altered as it can render the application unusable.
*			The Registry can be a very powerful tool, if you need a certain tool accessible 
*			throughout the framework, create the instance of the class in the core/config.php
*			file and set it in the Registry instance already created.
*/

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