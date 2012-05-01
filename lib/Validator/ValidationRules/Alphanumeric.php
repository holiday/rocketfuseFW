<?php

class AlphanumericValidator extends AbstractValidator {
	
	//one or more alphanumeric character(s)
	private $re = "/^[a-zA-Z0-9]+$/";
	
	public function validate() {
		return preg_match($this->re, $this->value);
	}
	
}

?>