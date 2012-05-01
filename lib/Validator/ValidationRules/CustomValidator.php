<?php

class CustomValidator extends AbstractValidator {
	
	public function validate() {
		return preg_match($this->options['regex'], $this->value);
	}
	
}

?>