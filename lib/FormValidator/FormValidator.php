<?php

//contains validation expressions
require 'Validator.php';

/**
*	Form Validator that is used to validate data, log error messages and perform additional form related tasks.
*/
class FormValidator{
	
	private $data;
	
	private $rules;
	
	private $validator;
	
	private $errors = array();
	
	/**
	*	Initialize a new FormValidator with rules and data to validate
	*	@param $rules Array
	*	@param $data Array structured like form POST data
	*/
	public function __construct($rules, $data){
		$this->rules = $rules;
		//remove the submit field
		$this->data = array_slice($data, 0, -1);
	}
	
	/**
	*	Run through each field's rule, get the POST data and call the 
	*	validation method based on the rule
	*/
	public function validate(){
		
		foreach($this->data as $fieldName => $fieldVal){
			if(isset($this->rules[$fieldName]['rule'])){
				//proceed to validate the field
				$fieldVal = array($fieldVal);
				
				$rule = $this->rules[$fieldName]['rule'];
				if(is_array($rule)){
					$fn = array_shift($rule);
					$rule = array_merge($fieldVal, $rule);
					if(!Validator::__callStatic($fn, $rule)){	
						$this->errors[$fieldName] = $this->rules[$fieldName]['message'];
					}
				}else{
					if(!Validator::__callStatic($rule, $fieldVal)) {
						$this->errors[$fieldName] = $this->rules[$fieldName]['message'];
					}
				}
			}
		}
	}
	
	public function validate2(){
		foreach($this->data as $fieldName => $val) {
			
			$params = array($val);
			
			$rule = $this->rules[$fieldName]['rule'];
			
			if(is_array($rule)){
				
				$fn = array_shift($rule);
				$rule = array_merge($params, $rule);
				if(!Validator::__callStatic($fn, $rule)){
					$this->errors[$val] = $rule['message'];
				}
			}
			if(!Validator::__callStatic($rule, $params)) {
				$this->errors[$val] = $rule['message'];
			}
		}
	}
	
	public function isValid(){
		return empty($this->errors);
	}
	
	public function getErrors(){
		return $this->errors;
	}
	
	public function getRules(){
		return $this->rules;
	}
	
}


?>