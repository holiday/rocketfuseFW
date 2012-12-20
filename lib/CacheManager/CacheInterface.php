<?php 

namespace CacheManager;

/**
*	CacheInterface sets the basis for various caching mechanisms.
*/
interface CacheInterface {
	
	public function set($key, $data, $expiry=NUll);
	
	public function get($key);
	
	public function delete($key);
	
	public function exists($key);
}

?>