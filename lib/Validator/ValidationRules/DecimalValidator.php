<?php

class DecimalValidator extends AbstractValidator {
	
	/**
	*	Return true if String is a valid decimal, false otherwise
	*	Options:
	*		'precision' : integer of the number of decimal spaces
	*/
	public function validate(){
		return preg_match('/^[+-]?[0-9]*\.[0-9]{' . $this->options['precision'] . '}$/', $this->value);
	}
	
}	

?>