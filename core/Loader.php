<?php

/**
*	Framework bootstrapper for loading all Classes.
*/
class Loader {
	
	//include path
	private $includePath;
	
	//file extension
	private $extension = '.php';
	
	//default os separator
	private $DS = DIRECTORY_SEPARATOR;
	
	/**
	*	Initialize the Loader with an include path. This is the main directory
	*	in which the Classes/Assets are located.
	*/
	public function __construct($includePath) {
		$this->includePath = $this->convertPath($includePath);
	}
	
	/**
	*	Requires Classes based on their location/type
	*	@param $type String type i.e. Module/Controller/Model
	*	@param $obj String Class/Object name
	*/
	public function import($type, $obj){
		$type = strtolower(trim($type));
		if($type == 'module'){
			require Loader::convertPath(__MODULES . "/$obj/$obj.php");
			return true;
		}
		return false;
	}
	
	/**
	*	Change the file type extension for this Loader
	*	@param String extension of file
	*/
	public function setExtension($ext){
		$this->extension('.php');
	}
	
	/**
	*	Returns true if the file exists, false otherwises
	*/
	public function classExists($path) {
		return file_exists($path);
	}
	
	/**
	*	Converts a path specific to the environment the framework is running in
	*	@param String path to be converted
	*/
	public static function convertPath($path) {
		//convert path to current OS
		$properOsPath = str_replace('/', DS, $path);
		return $properOsPath;
	}
	
	/**
	*	Main autoloading method. Autoloading requests get made to this method.
	*	@param $className String name of class
	*/
	public function loadClass($className){
		//build the file location path
		$class = $this->includePath . $this->DS . $this->convertPath($className) . '.php';
		if (file_exists($class)) {
			//require the file
			require $class;
			return true;
		}
		return false;
	}
	
	/**
	*	Registers this instance on the autoload stack
	*/
	public function register(){
		spl_autoload_register(array($this, 'loadClass'));
	}
	
	/**
	*	Unregisters this instance from the autoload stack
	*/
	public function unRegister(){
		spl_autoload_unregister(array($this, 'loadClass'));
	}
	
}

?>