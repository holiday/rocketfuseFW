<?php 


abstract class AbstractValidator {
	
	//the value to be validated
	protected $value;
	
	//Stores options that the validate() method requires to perform the validation
	protected $options;
	
	//the fieldname that this Validator is acting on
	protected $fieldName;
	
	/**
	*	Initialize a new AbstractValidator
	*	@param $value String to be validated
	*	@param $errorMsg Error message to be logged should validation fail
	*/
	public function __construct($fieldName, $value, $options=null) {
		$this->fieldName = $fieldName;
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
	
	public function required() {
		if(isset($this->options['required'])) {
			return $this->options['required'];
		}
		return true;
	}
	
	public function nullValue() {
		if(is_array($this->value) && count($this->value) <= 0) {
			return true;
		}elseif(is_string($this->value) && strlen(trim($this->value)) == 0) {
			return true;
		}elseif($this->value == null) {
			return true;
		}	
		return false;
	}
	
	public function toString() {
		return "Field: " . $this->getFieldName() . ', Null Value?: ' . (int)$this->nullValue() . ', Required: ' . (int)$this->required() . '<br>';
	}
	
	/**
	*	Getter for values
	*/	
	public function getValue() {
		return $this->value;
	}
	
	/**
	*	Getter for the fieldName
	*/	
	public function getFieldName() {
		return $this->fieldName;
	}
	
	/**
	*	Getter for the error message
	*/
	public function getError() {
		return $this->options['message'];
	}
	
	
}


?>