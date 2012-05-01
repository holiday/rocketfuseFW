<?php 


abstract class AbstractValidator {
	
	//the value to be validated
	protected $value;
	
	//Stores options that the validate() method requires to perform the validation
	protected $options;
	
	/**
	*	Initialize a new AbstractValidator
	*	@param $value String to be validated
	*	@param $errorMsg Error message to be logged should validation fail
	*/
	public function __construct($value, $options=null) {
		$this->value = $value;
		$this->options = $options;
	}
	
	/**
	*	To be implemented for each Validator
	*/
	abstract public function validate();
	
	/**
	*	Setter for the Validator value
	*/
	public function setValue($val) {
		$this->value = $val;
	}
	
	private function required() {
		if(isset($this->options['required']) && $this->options['required'] == false) {
			return false;
		}
		return true;
	}
	
	/**
	*	Getter for values
	*/	
	public function getValue() {
		return $this->value;
	}
	
	/**
	*	Getter for the error message
	*/
	public function getError() {
		return $this->options['message'];
	}
	
	
}


?>