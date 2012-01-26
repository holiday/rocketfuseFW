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

//get the init.php core file
require_once(__ROOT . DS . 'core' . DS . 'init.php');

//core bootstrapper
$registry = new \core\Registry();

//load in the router to the registry
$registry->Router = new \core\Router($registry);

//load in the database in the registry
$registry->Database = new \core\Database($registry);

//template class
$registry->Template = new \core\Template($registry);

//load the controller
$registry->Router->loadController();

?>