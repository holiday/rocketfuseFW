<?php

class Post extends Input {

	protected $input = array();
	
	public function init() {
		if(isset($_POST)) {
			$this->input = $_POST;
		}
	}
}

?>