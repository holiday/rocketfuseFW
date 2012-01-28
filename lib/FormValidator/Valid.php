<?php

class Valid{
	
	/* Regular Expressions for rules */
	
	//letters and numbers
	public static $alphanumeric = "/^[a-zA-Z0-9]+$/";
	
	//letters only
	public static $alpha = "/^[a-zA-Z]+$/";
	
	//letters with spaces
	public static $alphaSpace = "/^[a-zA-Z\s]+$/";
	
	//numbers
	public static $numeric = "/^[0-9]+$/";
	
	//name
	public static $name = "/^[a-zA-Z]+[\-\']?[a-zA-Z]+$/";
	
	
	public static function __callStatic($fnName, $fnArgs){
		return call_user_func_array(array(__CLASS__, $fnName), $fnArgs);
	}
	
	public static function notempty($val){
		return (strlen(trim($val)));
	}
	
	public static function alphanumeric($val){
		return preg_match(self::$alphanumeric, $val);
	}
	
	public static function alpha($val){
		return preg_match(self::$alpha, $val);
	}
	
	public static function alphaspace($val){
		return preg_match(self::$alphaSpace, $val);
	}
	
	public static function numeric($val){
		return preg_match($numeric, $val);
	}
	
	/**
	*	Returns true if the length of the value is between the start and end (non-inclusive)
	*	@param $val String input
	*	@param $start Integer min length
	*	@param $end Integer max length
	*/
	public static function between($val, $start, $end){
		return (strlen($val) > $start && strlen($val) < $end);
	}
	
	public static function length($val, $length) {
		return strlen($val) == $length;
	}
	
	public static function minLength($val, $minLength){
		return (strlen($val) >= $minLength);
	}
	
	public static function maxLength($val, $maxLength){
		return (strlen($val) <= $maxLength);
	}
	
	public static function boolean($val){
		return ($val ==  1 || $val == 0);
	}
	
	public static function email($val){
		$isValid = true;
		$atIndex = strrpos($val, "@");
		if (is_bool($atIndex) && !$atIndex){
			$isValid = false;
		}else{
			$domain = substr($val, $atIndex+1);
			$local = substr($val, 0, $atIndex);
			$localLen = strlen($local);
			$domainLen = strlen($domain);
			
			if ($localLen < 1 || $localLen > 64){
				// local part length exceeded
				$isValid = false;
			}else if ($domainLen < 1 || $domainLen > 255){
				// domain part length exceeded
				$isValid = false;
			}else if ($local[0] == '.' || $local[$localLen-1] == '.'){
				// local part starts or ends with '.'
				$isValid = false;
			}else if (preg_match('/\\.\\./', $local)){
				// local part has two consecutive dots
				$isValid = false;
			}else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)){
				// character not valid in domain part
				$isValid = false;
			}else if (preg_match('/\\.\\./', $domain)){
				// domain part has two consecutive dots
				$isValid = false;
			}else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local))){
				// character not valid in local part unless 
				// local part is quoted
				if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local))){
					$isValid = false;
				}
			}
			if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))){
				// domain not found in DNS
				$isValid = false;
			}
		}
		return $isValid;
	}
	
	public static function name($val){
		preg_match(self::$name, $val);
	}
	
	/**
	*	Validates all major credit cards:
	*	MASTERCARD, VISA, AMEX, DinersClub/CarteBlanche, Discover, enRoute, jcb
	*	Uses Luhn's Algorithm to compute via a check digit
	*/
	public static function creditcard($val, $type){
		
		if(strlen(trim($val)) == 0){
			return false; 
		}
		
		//clean spaces around and between digits
		$val = preg_replace('/\s+/', '', trim($val));
		//match lengths and prefixes
		$regexCards = array(
			'mastercard' => '/^5[1-5]{1}[0-9]{14}$/',
			'visa' => '/^4\d{12}(\d{3})?$/',
			'amex' => '/^3(4|7)\d{13}$/',
			'dinersclub' => '/^((30[0-5]{1}\d{11})|(3(6|8)\d{12}))$/',
			'discover' => '/^6011(\d){12}$/',
			'enroute' => '/^2((014(\d){11})|(149(\d){11}))$/',
			'jcb' => '/^(3(\d{15}))|(2131(\d){11})|(1800(\d){11})$/'
		);
		
		return (preg_match($regexCards[strtolower(trim($type))], $val) && self::mod10check($val));
		
	}
	
	/**
	*	Luhn's Algorithm (Mod 10 Checker) for security cards that use check digits
	*	@param $val String of number to check
	*/
	public static function mod10check($val){
		//echo "The card number is : " . $val . "<br>";
		$chars = str_split($val);
		$charLen = count($chars);
		
		$i = count($chars) - 2;
		while($i >= 0){
			$chars[$i] = $chars[$i] * 2;
			$i = $i - 2;
		}
		
		$charsString = implode('', $chars);
		$sum = 0;
		$chars = str_split($charsString);
		foreach($chars as $char){
			$sum += $char;
		}
		//echo "The sum is: " . $sum . "<br>";
		return (($sum % 10) == 0);
		
	}
	
	public static function custom($val, $regex){
		return preg_match($regex, $val);
	}
	
	public static function decimal($val, $precision){
		return preg_match('/^[+-]?[0-9]*\.[0-9]{' . $precision . '}$/');
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
	
	public static function inArray($val, $items){
		foreach($items as $item){
			if(strtolower($val) == strtolower($item)) {
				return true;
			}
		}
		return false;
	}
	
}

?>