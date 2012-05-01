<?php

abstract class Input {
	
	protected $input;
	
	public function __construct() {
		echo "constructed";
		$this->init();
	}
	
	abstract public function init();
	
	public function __get($input) {
		echo "called";
		if(array_key_exists($input, $this->input)) {
			return $this->input[$input];
		}
		
		return null;
	}
		
}

?>