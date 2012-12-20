<?php

namespace PostManager;

class PostManager {
	
	private static $_post = array();
	
	public function __construct() {}	
	
	public static function init() {
		if(isset($_POST)) { 
			PostManager::$_post = $_POST;
			return true;
		}
		return false;
	}
	
	public static function get($key) {
		if(PostManager::exists($key)) {
			return PostManager::$_post[trim($key)];
		}
		return NULL;
	}	
	
	public static function exists($key) {
		return isset(PostManager::$_post[trim($key)]);
	}
	
}

?>