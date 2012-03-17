<?php

require_once('ValidatorHelper.php');

class FormValidator {
	
	private $val;
	
	private $data = array();
	
	private $rules = array();
	
	public function __construct($validationRules) {
		$this->val = new ValidatorHelper();
		$this->data = array_merge($_POST, $_FILES);
		$this->rules = $validationRules;
	}
	
	public function getData() {
		return $this->data;
	}
	
	public function validate() {
		
		foreach($this->rules as $fieldName => $rule) {
			
			//the data to be validated
			$data = (isset($this->data[$fieldName])) ? $this->data[$fieldName] : null;
			
			if(isset($rule['rule']) && !is_array($rule['rule'])) {
				//single validation
				
				$this->run(trim($rule['rule']), $data , $rule);
			}else {
				//multiple rules on the same field
				foreach($rule as $subRuleName => $subrule) {
					//execute each subrule
					$this->run(trim($subrule['rule']), $data, $subrule);
				}
			}
		}
		
		return $this->execute();
		
	}
	
	private function run($ruleName, $data=null, $options) {
		//echo 'Executing rule ', $ruleName, ' with data ' , json_encode($data), ' and options ', json_encode($options), '<br>';
		
		$validationRule = ucfirst($ruleName) . 'Validator';
		$this->val->addValidator(new $validationRule($data, $options));
		
	}
	
	private function execute() {
		return $this->val->validate();
	}
	
	public function getErrors() {
		return $this->val->getErrors();
	}
	
}

?>