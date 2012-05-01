<?php

class DateValidator extends AbstractValidator {
	
	public function validate() {
		
		if($this->value == null || trim($this->value) == '') {
			return false;
		}
		
		switch($this->options['format']) {
			
			case 'dmy':
				list($d, $m, $y) = preg_split("/[\-\.\s\/]/", $this->value);
			break;
			
			case 'mdy':
				list($m, $d, $y) = preg_split("/[\-\.\s\/]/", $this->value);
			break;
			
			case 'ymd':
				list($y, $m, $d) = preg_split("/[\-\.\s\/]/", $this->value);
			break;
			
			case 'dMy':
				list($d, $m, $y) = preg_split("/[\-\.\s\/]/", $this->value);
			break;
			
			case 'Mdy':
				list($m, $d, $y) = array_filter(preg_split("/[\-\.\s\/\,]/", $this->value)); //FIXX THIS, the INDEXS are offset due to filter
			break;
			
			case 'My':
				list($m, $y) = preg_split("/[\-\.\s\/]/", $this->value);
			break;
			
			case 'my':
				list($m, $y) = preg_split("/[\-\.\s\/]/", $this->value);
			break;
			
			default:
			throw new Exception('Invalid option `format` passed to DateValidator.');
		}
		
		$m = date('m',strtotime(trim($m)));
		return checkdate((int)$m, (int)$d, (int)$y);
		
	}
	
}	

?>