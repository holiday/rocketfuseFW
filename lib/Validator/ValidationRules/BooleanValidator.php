<?php 

class BooleanValidator extends AbstractValidator {
	
	public function validate() {
		return (is_bool($this->value) || $this->value == 1 || $this->value == 0 || $this->value == '1' || $this->value == '0') ? true : false;
	}
	
}	

?>