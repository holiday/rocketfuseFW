<?php

/*
*	BootStrapper File, loads all core files, models and controllers on request including Propel ORM
*/

//Propel.php
require_once(__ROOT . DS . 'vendors' . DS . 'propel' . DS . 'runtime' . DS . 'lib' . DS . 'Propel.php');
// Initialize Propel with the runtime configuration
Propel::init(__ROOT . DS . 'application' . DS . 'schema' . DS . 'build' . DS . 'conf' . DS . 'models-conf.php');
// Add the generated 'classes' directory to the include path
set_include_path(__ROOT . DS . 'application' . DS . 'schema' . DS . 'build' . DS . 'classes' . PATH_SEPARATOR . get_include_path());

//set the vendors path
set_include_path(__ROOT . DS . 'vendors' . PATH_SEPARATOR . get_include_path());

/* Framework Core File Loading*/
require_once(__ROOT . DS . 'core' . DS . 'Loader.php');

$loader = new \core\Loader("core", __ROOT);
$loader->register();

$loader = new \core\Loader(null, __ROOT . DS . 'application' . DS . 'schema' . DS . 'build' . DS . 'classes' . DS . 'models' . DS . 'map');
$loader->register();

$loader = new \core\Loader(null, __ROOT . DS . 'application' . DS . 'schema' . DS . 'build' . DS . 'classes' . DS . 'models' . DS . 'om');
$loader->register();

$loader = new \core\Loader(null, __ROOT . DS . 'application' . DS . 'schema' . DS . 'build' . DS . 'classes' . DS . 'models');
$loader->register();



?>