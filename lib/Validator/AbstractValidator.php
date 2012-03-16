<?php 


abstract class AbstractValidator {
	
	protected $value;
	
	protected $required;
	
	protected $errorMsg='';
	
	protected static $validator;
	
	/**
	*	Initialize a new AbstractValidator
	*	@param $value String to be validated
	*	@param $errorMsg Error message to be logged should validation fail
	*/
	public function __construct() {
	}
	
	public static function create() {
		$calledClass = get_called_class();
		return new $calledClass;
	}
	
	/**
	*	To be implemented for each Validator
	*/
	abstract public function validate();
	
	/**
	*	Setter for required field
	*/
	public function required() {
		$this->reqired = true;
		return $this;
	}
	
	public function value($value) {
		$this->value = $value;
		return $this;
	}
	
	public function message($msg) {
		$this->errorMsg = $msg;
		return $this;
	}	
	
	/**
	*	Getter for the error message
	*/
	public function getError() {
		return $this->errorMsg;
	}
	
	
}


?>