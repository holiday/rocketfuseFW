<?php 

namespace ValidationTypes;
require_once 'AbstractValidator.php';

class MultipleValidator extends AbstractValidator {
	
	public function validate() {
		
		try {
			$min = $this->options['min'];
			$max = $this->options['max'];
			
			if(is_array($this->value)) {
				$items = count($this->value);
				return ($items <= $max && $items >= $min);
			}elseif(strlen($this->value) > 0 || $this->value != null) {
				return true;
			}
			return false;
			
		}catch(Exception $e) {
			throw new Exception("MultipleValidator requires options 'min' and 'max' to be set.");
		}
		
	}

}	

?>