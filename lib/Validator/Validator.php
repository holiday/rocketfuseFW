<?php

/**
*	Validation class for data sanitization and checking.
*/

class Validator{
	
	private $currentField;
	
	private $post;
	
	private $errors = array();
	
	private $message;
	
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
	
	//email
	public static $email = "/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*\s+&lt;(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})&gt;$|^(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})$/";
	
	
	/*End Regex Rules*/
	
	public function Validator($data){
		$this->post = $data;
	}
	
	public function isValid(){
		return (empty($this->errors));
	}
	
	public function getErrors(){
		return $this->errors;
	}
	
	private function _logError(){
		$this->errors[$this->currentField] = $this->message;
	}
	
	private function _val(){
		if(isset($this->post[$this->currentField])){
			if(!trim($this->post[$this->currentField]) == ""){
				return trim($this->post[$this->currentField]);
			}
		}
		return false;
	}
	
	public function validate($key, $message){
		$this->currentField = $key;
		$this->message = $message;
		return $this;
	}
	
	public function required(){
		if(!$this->_val()){
			$this->_logError();
		}
		return $this;
	}
	
	public function notempty(){
		if(!strlen(trim($this->_val()))){
			$this->_logError();
		}
		return $this;
	}
	
	public function alphanumeric(){
		if(!preg_match(self::$alphanumeric, $this->_val())){
			$this->_logError();
		}
		return $this;
	}
	
	public function alpha(){
		if(!preg_match(self::$alpha, $this->_val())) {
			$this->_logError();
		}
		return $this;
	}
	
	public function alphaspace(){
		if(!preg_match(self::$alphaSpace, $this->_val())){
			$this->_logError();
		}
		return $this;
	}
	
	public function numeric(){
		if(!preg_match(self::$numeric, $this->_val())){
			$this->_logError();
		}
		return $this;
	}
	
	/**
	*	Returns true if the length of the value is between the start and end (non-inclusive)
	*	@param $start Integer min length
	*	@param $end Integer max length
	*/
	public function between($start, $end){
		if(!(strlen($this->_val()) > $start && strlen($this->_val()) < $end)) {
			$this->_logError();
		}
		return $this;
	}
	
	public function length($length) {
		if(!strlen($this->_val()) == $length) {
			$this->_logError();
		}
		return $this;
	}
	
	public function minLength($minLength){
		if(!strlen($this->_val()) >= $minLength) {
			$this->_logError();
		}
		return $this;
	}
	
	public function maxLength($maxLength){
		if(!strlen($this->_val()) <= $maxLength) {
			$this->_logError();
		}
		return $this;
	}
	
	public function boolean(){
		if(!($this->_val() ==  1 || $this->_val() == 0)) {
			$this->_logError();
		}
		return $this;
	}
	
	public function email($dnsCheck=true){
		
		if(!preg_match(self::$email, $this->_val())){
			$this->_logError();
		}
		/////////////////////////////////
		//This will check to see if the domain part is valid
		if($dnsCheck){
			$atIndex = strrpos($this->_val(), "@");
			if($atIndex == false){
				$this->_logError();
			}else{
				$domain = substr($this->_val(), $atIndex+1);
				echo $domain;
				if(!(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))){
					$this->_logError();
				}
			}
		}
		//End Domain Check
		////////////////////////////////////////////////////
		return $this;
	}
	
	public function email2(){
		$isValid = true;
		$atIndex = strrpos($this->_val(), "@");
		if (is_bool($atIndex) && !$atIndex){
			$isValid = false;
		}else{
			$domain = substr($this->_val(), $atIndex+1);
			$local = substr($this->_val(), 0, $atIndex);
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
			$this->_logError();
		}
		return $this;
	}
	
	public function name(){
		if(!preg_match(self::$name, $this->_val())) {
			$this->_logError();
		}
		return $this;
	}
	
	/**
	*	Validates all major credit cards:
	*	MASTERCARD, VISA, AMEX, DinersClub/CarteBlanche, Discover, enRoute, jcb
	*	Uses Luhn's Algorithm to compute via a check digit
	*/
	public function creditcard($type){
		
		//clean spaces around and between digits
		$val = preg_replace('/\s+/', '', trim($this->_val()));
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
		
		if(!preg_match($regexCards[strtolower(trim($type))], $val) && self::_mod10check($val)) {
			$this->_logError();
		}
		return $this;
		
	}
	
	/**
	*	Luhn's Algorithm (Mod 10 Checker) for security cards that use check digits
	*	@param $val String of number to check
	*/
	private function _mod10check($val){
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
	
	public function custom($regex){
		if(!preg_match($regex, $this->_val())) {
			$this->_logError();
		}
		return $this;
	}
	
	public function decimal($precision){
		if(!preg_match('/^[+-]?[0-9]*\.[0-9]{' . $precision . '}$/')) {
			$this->_logError();
		}
		return $this;
	}
	
	public function select(){
		
	}
	
	public function postal(){
		
	}
	
	public function phone(){
		
	}
	
	public function range($from, $to, $inclusive=false){
		if($inclusive){
			if(!($this->_val() >= $from && $this->_val() <= $to)) {
				$this->_logError();
			}
		}else{
			if(!($this->_val() > $from && $this->_val() < $to)) {
				$this->_logError();
			}
		}
		return $this;
	}
	
	public function socialsecurity(){
		
	}
	
	public function url(){
		
	}
	
	public function extension(){
		
	}
	
	public function inarray($items){
		foreach($items as $item){
			if(strtolower($this->_val()) == strtolower($item)) {
				return $this;
			}
		}
		$this->_logError();
		return $this;
	}
	
}

?>