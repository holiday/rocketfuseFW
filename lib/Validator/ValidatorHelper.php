<?php

require_once ('lib/Bootstrapper.php');
require_once('AbstractValidator.php');

class ValidatorHelper {
	
	protected $validators;
	
	protected $errors;
	
	/**
	*	Initialize a new ValidatorHelper
	*/
	public function ValidatorHelper() {
		$this->validators = array();
		$this->errors = array();
		
		//bootstrap the ValidationRules
		$bootstrapper = new Bootstrapper();
		$bootstrapper->setIncludePath('lib/Validator/ValidationRules');
		$bootstrapper->register();
	}
	
	/**
	*	Add an AbstractValidator to this ValidatorHelper
	*/
	public function addValidator(AbstractValidator $v) {
		$this->validators[] = $v; //add a new validator
		
		return $this;
	}
	
	/**
	*	Validate all the AbstractValidators in one shot and log errors
	*/
	public function validate() {
		foreach($this->validators as $validator) { //perform all validations
			if(!$validator->validate()) {
				$this->errors[] = $validator->getError(); //log each error 
			}
		}
		
		return empty($this->errors) ? true : false; //checks for errors
 	}
	
	
	/**
	*	Getter for errors
	*/
	public function getErrors() {
		return $this->errors;
	}
	
	/**
	*	Re-initialize the validator so a new validation can be performed
	*/
	public function reset() {
		$this->validators = array();
		$this->errors = array();
	}
	
	
}

?>
