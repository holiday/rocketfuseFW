<?php

class Valid{
	
	/* Regular Expressions for rules */
	
	//letters and numbers
	public static $alphanumeric = "/^[a-zA-Z0-9]+$/";
	
	//letters only
	public static $alpha = "/^[a-zA-Z]+$/";
	
	
	public static function __callStatic($fnName, $fnArgs){
		return call_user_func_array(array(__CLASS__, $fnName), $fnArgs);
	}
	
	public static function alphanumeric($val){
		return preg_match(self::$alphanumeric, $val);
	}
	
	public static function alpha($val){
		return preg_match(self::$alpha, $val);
	}
	
	public static function alphaspace(){
		
	}
	
	public static function numeric(){
		
	}
	
	public static function between(){
		
	}
	
	public static function contains(){
		
	}
	
	public static function minLength(){
		
	}
	
	public static function maxLength(){
		
	}
	
	public static function boolean(){
		
	}
	
	public static function email(){
		
	}
	
	public static function name(){
		
	}
	
	public static function creditcard(){
		
	}
	
	public static function custom(){
		
	}
	
	public static function decimal(){
		
	}
	
	public static function select(){
		
	}
	
	public static function postal(){
		
	}
	
	public static function phone(){
		
	}
	
	public static function range(){
		
	}
	
	public static function socialsecurity(){
		
	}
	
	public static function url(){
		
	}
	
	public static function extension(){
		
	}
	
}

?>