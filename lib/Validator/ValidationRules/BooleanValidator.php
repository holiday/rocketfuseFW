<?php 

class BooleanValidator extends AbstractValidator {
	
	public function validate() {
		return (is_bool($this->value)) ? true : false;
	}
	
}	

?>