<?php 

/**
*	Determines whether a certain value is within a specified range.
*	NOTE: If a string is supplied to be checked, its length will be used.
*/

class RangeValidator extends AbstractValidator {
	
	public function validate() {
		
		if(!is_numeric($this->value)) {
			if(is_array($this->value)) {
				//check array length
				return (count($this->value) >= $this->options['from'] && $this->value <= $this->options['to']) ? true : false;
			}
			//check string length
			return (strlen($this->value) >= $this->options['from'] && $this->value <= $this->options['to']) ? true : false;
		}	
		//check if number is in range
		return ($this->value >= $this->options['from'] && $this->value <= $this->options['to']) ? true : false;
		
	}
	
}	

?>