<?php

require_once('Mod10Validator.php');

class CreditcardValidator extends AbstractValidator {
	
	/**
	*	Return true if String is a valid creditcard number, false otherwise.
	*	@param $val String creditcard number
	*	@param $type String credit card type i.e (MASTERCARD, VISA, AMEX, DinersClub/CarteBlanche, Discover, enRoute, jcb)
	*/
	public function validate() {
		
		//clean spaces around and between digits
		$val = preg_replace('/\s+/', '', trim($this->value));
		
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
	
		$mod10checker = new Mod10Validator($val);
		
		if(!preg_match($regexCards[strtolower(trim($type))], $val) && $mod10checker->validate()) {
			return false;
		}
		return true;
		
	}
}

?>