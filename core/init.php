<?php

/*
*	BootStrapper File, loads all core files, models and controllers on request including Propel ORM
*/

/*
/* Framework Core File Loading*/
require __ROOT . DS . 'core' . DS . 'Loader.php';

//Application Directory Include path
set_include_path(__ROOT . PATH_SEPARATOR . get_include_path());

/* PROPEL BOOTSTRAP*/
require_once(Loader::convertPath('vendors/propel/runtime/lib/Propel.php'));
Propel::init(Loader::convertPath('application/schema/build/conf/models-conf.php'));
set_include_path(Loader::convertPath('application/schema/build/classes') . PATH_SEPARATOR . get_include_path());
/* END PROPEL BOOTSTRAP*/

//set the vendors path
set_include_path('vendors' . PATH_SEPARATOR . get_include_path());

//include the core files
set_include_path('core' . PATH_SEPARATOR . get_include_path());

$loader = new Loader(__ROOT . DS . 'core');
$loader->register();

$loader = new Loader('application/schema/build/classes/models/map');
$loader->register();

$loader = new Loader('application/schema/build/classes/models/om');
$loader->register();

$loader = new Loader('application/schema/build/classes/models');
$loader->register();

?>