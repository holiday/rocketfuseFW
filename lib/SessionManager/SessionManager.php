<?php 

namespace SessionManager;

class SessionManager {	
	
	private static $_sessionStarted = false;
	
	public function __construct() {}
	
	/**
	*	Initializes a new session with $sessionName and returns the current session name.
	*/
	public static function init($sessionName=null) {
		
		if($sessionName) {
			//switch to another session by its name
			SessionManager::change($sessionName);
		}	
		
		if(!SessionManager::$_sessionStarted) {
			//initialize or resume a session
			session_start();
			SessionManager::$_sessionStarted = true;
		}
		
		return session_name();
	}
	
	/**
	*	Changes the current session name
	*/
	public static function change($sessionName) {
		return session_name($sessionName);
	}
	
	/**
	*	Returns the ID of the current session	
	*/
	public static function getID() {
		return session_id();
	}
	
	/**
	*	Stores a value for this current session
	*/
	public static function store($key, $value) {
		$_SESSION[$key] = $value;
	}
		
	/**
	*	Deletes a value on this current session
	*/
	public static function delete($key) {
		$_SESSION[$key] = NULL;
	}
	
	/**
	*	Return True if value exists in the current session, false otherwise
	*/
	public static function exists($key) {
		return isset($_SESSION[$key]);
	}	
	
	/**
	*	Return the value corresponding to $key if it exists, NULL otherwise
	*/
	public static function get($key) {
		if(SessionManager::exists($key)) {
			return $_SESSION[$key];
		}
		return NULL;
	}
	
	/*
	*	Destroys the current session along with all data. Must be called only if a session exists
	*/
	public static function clear() {
		$_SESSION = array();
		if(isset($_COOKIE[session_name()])){
		   setcookie(session_name(),'', time()-48000,'/');
		}
		session_destroy();
	}
	
	/**
	*	Generates a String representation of the current data in the session
	*/
	public static function toString($sessionName=null) {
		return '<pre>' . print_r($_SESSION, true) . '</pre>';
	}
}



?>