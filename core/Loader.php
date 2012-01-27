<?php

class Loader {
	
	//namespace
	private $ns;
	
	//include path
	private $includePath;
	
	//file extension
	private $extension = '.php';
	
	//default os separator
	private $DS = DIRECTORY_SEPARATOR;
	
	public function __construct($ns=null, $includePath) {
		$this->includePath = $this->convertPath($includePath);
		$this->ns = $ns;
	}
	
	public function import($type, $obj){
		if(strtolower($type) == 'module'){
			require Loader::convertPath("lib/$obj/$obj.php");
			return true;
		}
		return false;
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
		$namespaceConvert = str_replace('\\', DS, $path);
		$properOsPath = str_replace('/', DS, $namespaceConvert);
		return $properOsPath;
	}
	
	public function loadClass($className){
		$class = $this->includePath . $this->DS . $this->convertPath($className) . '.php';
		if (file_exists($class)) {
			require $class;
			return true;
		}
		return false;
	}
	
	public function register(){
		spl_autoload_register(array($this, 'loadClass'));
	}
	
	public function unRegister(){
		spl_autoload_unregister(array($this, 'loadClass'));
	}
	
}

?>