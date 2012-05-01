<?php

class AlphaValidator extends AbstractValidator {
	
	private $re = "/^[a-zA-Z]+$/";
	
	public function validate() {
		return preg_match($this->re, $val);
	}
	
}

?>