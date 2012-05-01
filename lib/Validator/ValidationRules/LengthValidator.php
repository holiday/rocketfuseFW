<?php

class LengthValidator extends AbstractValidator {
	
	public function validate() {
		if(is_array($this->value)) {
			return (count($this->value) == $this->options['length']);
		}
		return (strlen($this->value) == $this->options['length']);
	}
	
}

?>