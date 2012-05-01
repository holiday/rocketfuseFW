<?php

/**
*	Validation class for data sanitization and checking.
*/

class ValidationMethods{
	
	/* Regular Expressions for rules */
	//letters and numbers
	public static $alphanumeric = "/^[a-zA-Z0-9]+$/";
	
	//letters only
	public static $alpha = "/^[a-zA-Z]+$/";
	
	//numbers only i.e. no decimals
	public static $numeric = "/^[0-9]+$/";
	
	//letters with spaces
	public static $alphaSpace = "/^[a-zA-Z\s]+$/";
	
	//name
	public static $name = "/^[a-zA-Z]+[\-\']?[a-zA-Z]+$/";
	
	//email
	public static $email = "/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*\s+&lt;(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})&gt;$|^(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})$/";
	
	public function __callStatic($methodName, $arguments) {
		return call_user_func_array(array(__CLASS__,  $methodName), $arguments);
	}
	
	/**
	*	Return true if String/Array is NOT empty, false otherwise.
	*	@param $val String/Array
	*/
	public static function notempty($val){
		if(is_array($val)) {
			return !empty($val);
		}
		return strlen(trim($val));	
	}
	
	/**
	*	Return true if String is alphanumeric, false otherwise
	*/
	public static function alphanumeric($val){
		return preg_match(self::$alphanumeric, $val);
	}
	
	/**
	*	Return true if String contains alphabetical characters, false otherwise
	*/
	public static function alpha($val){	
		return preg_match(self::$alpha, $val);
	}
	
	/**
	*	Return true if String contains alphabetical characters including spaces, false otherwise	
	*/
	public static function alphaspace($val){
		return preg_match(self::$alphaSpace, $val);
	}
	
	/**
	*	Return true if the String is numeric, false otherwise
	*/
	public static function numeric($val){
		return preg_match(self::$numeric, $val);
	}
	
	/**
	*	Returns true if the length of the value is between the start and end (non-inclusive)
	*	@param $start Integer min length
	*	@param $end Integer max length
	*/
	public static function between($val, $start, $end){
		return (strlen($val) > (int)$start && strlen($val) < (int)$end);
	}
	
	/**
	*	Return true if the the String has a length of $length, false otherwise
	*	@param $val String
	*	@param $length Integer
	*/
	public static function length($val, $length) {
		return (strlen($val) == (int)$length);
	}

	/**
	*	Return true if the String is atleast $minLength
	*	@param $val String
	*	@param $minLength Integer
	*/
	public static function minlength($val, $minLength){
		return (strlen($val) >= (int)$minLength);
	}
	
	/**
	*	Return true if String is less than equal to $maxLength
	*	@param $val String
	*	@param $maxLength Integer
	*/
	public static function maxlength($val, $maxLength){
		return (strlen($val) <= (int)$maxLength);
	}
	
	/**
	*	Return true if $val is Boolean
	*/
	public static function boolean($val){
		return is_bool($val);
	}
	
	/**
	*	Return true if String is a valid email address and if DNS check passes (given that DNSCheck is enabled)
	* 	otherwise return false.
	*	@param $val String 
	*	@param $dnsCheck Boolean
	*/
	public static function email($val, $dnsCheck=true){
		
		if(!preg_match(self::$email, $val)){
			return false;
		}
		/////////////////////////////////
		//This will check to see if the domain part is valid
		if($dnsCheck){
			$atIndex = strrpos($val, "@");
			if($atIndex == false){
				return false;
			}else{
				$domain = substr($val, $atIndex+1);
				echo $domain;
				if(!(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))){
					return false;
				}
			}
		}
		//End Domain Check
		////////////////////////////////////////////////////
		return true;
	}
	
	//Backup, to be tested thoroughly
	public static function email2($val){
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
		
		if(!$isValid) {
			return false;
		}
		
		return true;
	}
	
	/**
	*	
	*/
	public static function name(){
		return preg_match(self::$name, $val);
	}
	
	/**
	*	Return true if String is a valid creditcard number, false otherwise.
	*	@param $val String creditcard number
	*	@param $type String credit card type i.e (MASTERCARD, VISA, AMEX, DinersClub/CarteBlanche, Discover, enRoute, jcb)
	*/
	public static function creditcard($val, $type){
		
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
		
		if(!preg_match($regexCards[strtolower(trim($type))], $val) && self::mod10check($val)) {
			return false;
		}
		return true;
		
	}
	
	/**
	*	Luhn's Algorithm (Mod 10 Checker) for security cards that use check digits
	*	@param $val String of number to check
	*/
	public static function mod10check($val){
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
		return (($sum % 10) == 0);
		
	}
	
	/**
	*	Return true if String matches the regex, false otherwise.
	*	@param $val String
	*	@param $regex String regular expression
	*/
	public static function custom($val, $regex){
		return preg_match($regex, $val);
	}
	
	/**
	*	Return true if String is a valid decimal, false otherwise
	*	@param $val String decimal number
	*	@param $val Integer decumal precision/spaces
	*/
	public static function decimal($val, $precision){
		return preg_match('/^[+-]?[0-9]*\.[0-9]{' . $precision . '}$/');
	}
	
	public static function select(){
		
	}
	
	public static function postal(){
		
	}
	
	public static function phone(){
		
	}
	
	/**
	*	Return true if String is in the range, false otherwise
	*	@param $val String
	*	@param $from Integer lowerbound
	*	@param $to Integer upperbound
	*	@param $inclusive Boolean
	*/
	public static function range($val, $from, $to, $inclusive=false){
		if($inclusive){
			if(!($val >= $from && $val <= $to)) {
				return false;
			}
		}else{
			if(!($val > $from && $val < $to)) {
				return false;
			}
		}
		return true;
	}
	
	public static function socialsecurity(){
		//to be implemented
	}
	
	public static function url(){
		//to be implemented
	}
	
	/**
	*	Return true if file sizes are within the correct range, false otherwise
	*	@param $val Array/File object, typically $_FILES should be passed here
	*	@param $size Integer size in megabytes
	*/	
	public static function filesize($files, $size, $multiple=true) {
		
		$size = ($size * 1024) * 1024;
		
		//Single file
		if(!$multiple) {
			if(!self::range($files['size'], 1, $size, true) || $files['error'] != 0) { //improper size and contains errors
				return false;
			}
			return true;
		}
		
		//Multiple files
		foreach($files as $file) {
			if(!self::range($file['size'], 1, $size, true)) {
				return false;
			}
		}
		return true;
	}
	
	public static function extension(){
		//to be implemented
	}
	
	/**
	*	Return true if Array contains the item, false otherwise
	*	@param $val String
	*	@param $item String
	*/
	public static function inarray($val, $item){
		return in_array($item, $val);
	}
	
}

?>