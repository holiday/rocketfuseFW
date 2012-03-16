<?php 

class IntegerValidator extends AbstractValidator {
	
	public function validate() {
		return (is_numeric($this->value)) ? true : false;
	}

}	

?>