<?php

require_once('ValidatorHelper.php');

class FormValidator {
	
	private $val;
	
	private $data;
	
	private $rules = array();
	
	public function __construct($validationRules, $data) {
		$this->val = new ValidatorHelper();
		$this->data = $data;
		$this->rules = $validationRules;
	}
	
	public function getData() {
		return $this->data;
	}
	
	private function getField($k) {

		if(array_key_exists($k, $this->data)) {
			
			$val = $this->data[$k];
			
			if(is_string($val) && trim($val) != '' && trim($val) != null) {
				return trim($val);
			}elseif(count($val) > 0) {
				return $val;
			}
		}
		
		return null;
	}
	
	public function validate() {
		
		foreach($this->rules as $fieldName => $rule) {
			
			//the data to be validated
			$data = $this->getField($fieldName);
			
			if(isset($rule['rule']) && !is_array($rule['rule'])) {
				//single validation
				
				$this->run($fieldName, trim($rule['rule']), $data , $rule);
			}else {
				//multiple rules on the same field
				foreach($rule as $subRuleName => $subrule) {
					//execute each subrule
					$this->run($fieldName, trim($subrule['rule']), $data, $subrule);
				}
			}
		}
		
		return $this->execute();
		
	}
	
	private function run($fieldName, $ruleName, $data=null, $options) {
		$validationRule = ucfirst($ruleName) . 'Validator';
		$this->val->addValidator(new $validationRule($fieldName, $data, $options));
		
	}
	
	private function execute() {
		return $this->val->validate();
	}
	
	public function getErrors() {
		return $this->val->getErrors();
	}
	
}

?>