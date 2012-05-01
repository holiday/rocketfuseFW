<?php

class NotemptyValidator extends AbstractValidator {
	
	public function validate() {
		
		//if the item is an array
		if(is_array($this->value) && !empty($this->value)) {
			return true;
		}
		
		return ($this->value != '' && $this->value != null);	
	}
	
}

?>