<?php

/*
	Template handles loading specific views associated with the current Controller. It is also responsible
	for loading in page attributes into views.
*/

class Template extends Core {
	
	public $vars = array();
	
	/*
	*	Magic Setter for dynamic variables
	*/
	public function __set($k, $v) {
		$this->vars[$k] = $v;	
	}
	
	/*
	*	Includes the requested HTML view pertaining to the current controller
	*	@param view String name of the html file
	*/
	public function render($view) {
		
		//if a controller was not specified then it is assumed the controller is the current one
		if(!isset($controller)) {
			$controller = $this->Registry->Router->controller;
		}
		
		//Look in the application/views/controller for the view
		$path = __VIEWS . $this->Registry->Router->controller . DS . $view . '.php';
		
		$path2 = __VIEWS . $view . '.php';

		//keys will become variables
		extract($this->vars);
		
		//check both the view directory and also check within the admin directory for the admin file
		if(is_readable($path)) {
			//include the view file
			include $path;
			return true;
		}elseif(is_readable($path2)){
			include $path2;
			return true;
		}else {
			throw new Exception ('Could not find view ' . $view, E_USER_ERROR);
			return false;
			
		}
			
	}
	
	public function errorpage($page){
		$path = __ERRORPAGES . $page . '.html';
		if(is_readable($path)) {
			//include the view file
			include $path;
			return true;
		}else {
			throw new Exception ('Could not find the page you were looking for at path: ' . $path, E_USER_ERROR);
			return false;
			
		}
	}
	
	public function js($fileName){
		echo '<script src="http://' . $_SERVER['HTTP_HOST'] . '/application/public/js/' . $fileName . '.js' . '" type="text/javascript"></script>';
	}
	
	public function css($fileName){
		echo '<link href="http://' . $_SERVER['HTTP_HOST'] . '/application/public/css/' . $fileName . '.css' . '" rel="stylesheet" type="text/css">';
	}
	
	public function less($fileName){
		echo '<link href="http://' . $_SERVER['HTTP_HOST'] . '/application/public/css/' . $fileName . '.less' . '" rel="stylesheet/less" type="text/css">';
	}
	
	
}

?>