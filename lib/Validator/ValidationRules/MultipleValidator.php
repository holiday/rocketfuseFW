<?php 

class MultipleValidator extends AbstractValidator {
	
	public function validate() {
		
		try {
			$min = $this->options['min'];
			$max = $this->options['max'];
			
			$items = count($this->value);
			
			return ($items <= $max && $items >= $min);
			
		}catch(Exception $e) {
			throw new Exception("MultipleValidator requires options 'min' and 'max' to be set.");
		}
		
	}

}	

?>