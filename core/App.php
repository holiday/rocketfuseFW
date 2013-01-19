<?php

/**
*	The App class is a singleton that serves as a bootstrapper for 
*	the core framework files. Specifically Router and Template managers.
*
*	NOTICE: This file should not be altered as it can render the application unusable.
*			The App can be a very powerful tool, if you need a certain tool accessible 
*			throughout the framework, create the instance of the class in the core/config.php
*			file and set it in the App instance already created.
*/

class App {
	
	//Storage for Core files
	private static $vars = array();
	
	//Singleton instance
	private $instance;
	
	//Prevent instantiation
	public function __construct() {
	}
	
	public static function instance() {
		
		if (!isset(self::$instance)) {
			$class = __CLASS__;
			self::$instance = new $class;	
		}

		return self::$instance;
			
	}
	
	//prevent cloning of the app
	public function __clone() {
		throw new Exception ('Cloning App is not permitted');
	}
	
	/**
	*	Magic setter for storing Core classes
	*	@param $k Core Class identifier
	*	@param $v Core Class instance
	*/
	public function __set($k, $v) {
		self::$vars[$k] = $v;
	}
	
	/**
	*	Magic getter for getting Core classes
	*	@param $k Core Class identifier
	*/
	public function __get($k) {
		return self::$vars[$k];	
	}
	
}

?>