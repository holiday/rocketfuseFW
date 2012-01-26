<?php
namespace core;

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
		$this->includePath = $includePath;
		$this->ns = $ns;
	}
	
	public function loadClass($className){
		
		$class = $this->includePath . $this->DS . str_replace('\\', '/', $className) . '.php';  
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