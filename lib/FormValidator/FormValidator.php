<?php

require 'Validator.php';

class FormValidator{
	
	private $data;
	
	private $rules;
	
	private $validator;
	
	private $errors = array();
	
	public function __construct($rules, $data){
		$this->rules = $rules;
		$this->data = array_slice($data, 0, -1);
		$this->validate();
	}
	
	public function validate(){
		foreach($this->data as $fieldName => $val) {
			
			$params = array($val);
			
			$rule = $this->rules[$fieldName]['rule'];
			
			if(is_array($rule)){
				
				$fn = array_shift($rule);
				$rule = array_merge($params, $rule);
				Validator::__callStatic($fn, $rule);
			}else{
				Validator::__callStatic($rule, $params);
			}
		}
	}
	
	public function addRule($fieldData, $fieldParams){
		
	}
	
	public function getRules(){
		return $this->rules;
	}
	
}


?>