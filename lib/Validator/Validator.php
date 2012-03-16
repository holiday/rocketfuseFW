<?php

require_once ('ValidationMethods.php');

/**
*	Validation class for data sanitization and checking.
*/

class Validator{
	
	//store the ValidatorMethods class
	private $validationMethods;
	
	//stores the name/key of the array
	private $field;
	
	//the value to validate
	private $value;
	
	//required fields
	private $required = array();
	
	//Array of key:value pairs to validate
	private $post;
	
	//Stores the error logs for failed validations
	private $errors = array(); 
	
	//Error message corresponding to the current field
	private $message;
	
	public function Validator($data){
		$this->post = $data;
		$this->validationMethods = new ValidationMethods();
	}
	
	public function setData($data) {
		$this->post = $data;
	}	
	
	public function isValid(){
		return (empty($this->errors));
	}
	
	public function getErrors(){
		return $this->errors;
	}
	
	private function _logError(){
		if(!isset($this->errors[$this->field])) {
			$this->errors[$this->field] = array('message' => $this->message, 'value' => $this->value);
		}
		return true;
	}
	
	private function _val(){
		if(isset($this->post[$this->field])){
			if(is_array($this->post[$this->field])) {
				return $this->post[$this->field];
			}
			return trim($this->post[$this->field]);
		}
		return NULL; //the field was not set
	}
	
	public function validate($field, $message){
		$this->field = $field;
		$this->value = $this->_val(); //the value to validate, if not defined, its set to null
		$this->message = $message;
		return $this;
	}
	
	public function __call($methodName, $arguments) {
		
		//add the value to be validated to the front of the array
		array_unshift($arguments, $this->_val());
		
		//call the method within the ValidationMethods class
		if(!$this->validationMethods->__callStatic($methodName, $arguments)) {
			
			if($this->required[$this->field] || $this->_val() != NULL) { //log errors only if REQUIRED or DATA IS SET
				$this->_logError(); //log the error since the validation failed
			}
		}
		
		return $this; //return this class to perform the next validation
	}
	
	/**
	*	Check to make sure that the field is present, otherwise log the error
	*/
	public function required() {

		//set this field as required
		$this->required[$this->field] = true;

		if(!isset($this->post[$this->field])) {
			$this->_logError();
		}
		return $this;
	}
	
}



?>