<?php

class Mod10Validator extends AbstractValidator {
	
	/**
	*	Luhn's Algorithm (Mod 10 Checker) for security cards that use check digits
	*	@param $this->value String of number to check
	*/
	public function validate(){
		$chars = str_split($this->value);
		$charLen = count($chars);
		
		$i = count($chars) - 2;
		while($i >= 0){
			$chars[$i] = $chars[$i] * 2;
			$i = $i - 2;
		}
		
		$charsString = implode('', $chars);
		$sum = 0;
		$chars = str_split($charsString);
		foreach($chars as $char){
			$sum += $char;
		}
		return (($sum % 10) == 0);
		
	}
	
}

?>