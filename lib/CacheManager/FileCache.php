<?php 

namespace CacheManager;
require_once 'CacheInterface.php';

class FileCache implements \CacheManager\CacheInterface {
	
	private static $_caches = array();
	
	//Sha1 hash tag based on auto-incrementing int
	private $_cacheID;
	//Main Cache Directory
	private $_cacheDir;
	//Keys are data hashes and values are the folder in which the data is located
	private $_cacheDirHashMap = array();
	private $_cacheDefaultExpiry = INF; 
	
	public function __construct($cacheDir) {
		$this->_cacheDir = trim($cacheDir);
		$this->init();
	}
	
	private function init() {
		
		//Generate the hash for this instance
		$hash = sha1(count(FileCache::$_caches));
		//Store it 
		$this->_cacheID = $hash;
		//Hash it statically
		FileCache::$_caches[$hash] = $this;
		//create the cache directory if it does not exist
		if(!file_exists($this->getCacheDir())) {
			if(!mkdir($this->getCacheDir(), 777)) {
				throw new Exception('Cache Directory does not exist, attempt to create it failed.');
			}
		}
		
		//create the cache sub directory
		if(!file_exists($this->getFileCacheDir())) {
			if(!mkdir($this->getFileCacheDir(), 777)) {
				throw new Exception('Could not create cache sub-directory, please check your cache directory path.');
			}	
		}
		
		//update the cacheDirHashMap
		updateHashMap();
	
	}
	
	private function updateHashMap() {
		//dump the cacheDirHashMap array into this file
		file_put_contents($this->getCacheDir . 'cacheDirHashMap', serialize($this->_cacheDirHashMap), LOCK_EX);
	}
	
	private function retrieveHashMap() {
		
	}
	
	public function getCacheID() {
		return $this->_cacheID;
	}
	
	private function getFileCacheDir() {
		return $this->getCacheDir() . DIRECTORY_SEPARATOR . $this->getCacheID();
	}
	
	public function getCacheDir() {
		return $this->_cacheDir;
	}
	
	public function set($key, $data, $expiry=NUll) {
		//check to make sure cache directory exists
		if(file_exists($this->getFileCacheDir())) {
			
		}
	}
	
	public function get($key) {
		//First rebuild the data hashmap
		//Decide whether the data has expired or not
		//If data expired, return NULL
		//otherwise return the cache file
		
		if(file_exists($this->getCacheDir . 'cacheDirHashMap')) {
			$this->_cacheDirHashMap = unserialize(stripslashes(file_get_contents($this->getCacheDir . 'cacheDirHashMap')));
		}
	}
	
	public function delete($key) {
		
	}
		
	public function exists($key) {
		
	}	
}

?>