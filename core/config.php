<?php

//error reporting set to all
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//set the default timezone
date_default_timezone_set('America/New_York');

//create a directory separator 
define ('DS', DIRECTORY_SEPARATOR);

//define the app directory
define('__APPLICATION', __ROOT . DS . 'application' . DS);

//define the core directory
define('__CORE', __ROOT . DS . 'core' . DS);

//controllers
define('__CONTROLLERS', __ROOT . DS . 'application' . DS . 'controllers' . DS);

//views
define('__VIEWS', __ROOT . DS . 'application' . DS . 'views' . DS);

//Modules dir
define('__MODULES', __ROOT . DS . 'lib' . DS);

//get the init.php core file
require __ROOT . DS . 'core' . DS . 'init.php';

//core bootstrapper
$registry = new Registry();

//load in the router to the registry
$registry->Router = new Router($registry);

//template class
$registry->Template = new Template($registry);

//load the controller
$registry->Router->loadController();


?>