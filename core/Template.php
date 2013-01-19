<?php

/*
	Template handles loading specific views associated with the current Controller. It is also responsible
	for loading in page attributes into views.
*/

class Template extends Core {
	
	private $templateLocations = array();

	public $vars = array();

	/*
	*	Magic Setter for dynamic variables
	*/
	public function __set($k, $v) {
		$this->vars[$k] = $v;	
	}

	public function addPath($path) {
		if(is_readable($path)) {
			array_push($this->templateLocations, $path);
		}else {
			throw new InvalidPathException('Template->addPath() could not recognise the given path');
		}
	}
	
	/*
	*	Includes the requested view pertaining to the current controller
	*	@param view String name of the html file
	*/
	public function render($view) {

		//get the current controller
		$controller = strtolower($this->App->Router->controller);

		//these are the paths the template should look in when attempting to render() files
		$this->addPath(__VIEWS . $controller . DS);
		$this->addPath(__VIEWS . DS);

		//keys will become variables
		extract($this->vars);

		//search for the view
		foreach($this->templateLocations as $dir) {
			if(file_exists($dir . $view . '.php')) {
				include $dir . $view . '.php';
				return true;
			}else if(file_exists($dir . $view)) {
				include $dir . $view;
				return true;
			}
		}

		//if the view was not found throw an error
		throw new MissingViewException ('Could not find view (' . $view . ') ' . 'for controller (' . $controller . ')' , E_USER_ERROR);
		return false;
			
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