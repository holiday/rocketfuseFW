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

//Modules dir
define('__MODELS', __ROOT . DS . 'application' . DS . 'models' . DS);

//controllers
define('__CONTROLLERS', __ROOT . DS . 'application' . DS . 'controllers' . DS);

//views
define('__VIEWS', __ROOT . DS . 'application' . DS . 'views' . DS);

//Modules dir
define('__MODULES', __ROOT . DS . 'lib' . DS);

//public dir
define('__PUBLIC', __ROOT . DS . 'application' . DS . 'public' . DS);

//public dir
define('__CSS', __ROOT . DS . 'application' . DS . 'public' . DS . 'css' . DS);

//public dir
define('__JS', __ROOT . DS . 'application' . DS . 'public' . DS . 'js' . DS);

//images dir
define('__IMAGES', __ROOT . DS . 'application' . DS . 'public' . DS . 'images' . DS);

define('__ERRORPAGES', __ROOT . DS . 'core' . DS . 'errorpages' . DS);

//get the init.php core file
require __ROOT . DS . 'core' . DS . 'init.php';

//get the routes file
require __ROOT . DS . 'core' . DS . 'routes.php';

//core bootstrapper
$app = new App();

//load in the router to the registry
$app->Router = new Router($app);

//template class
$app->Template = new Template($app);

//Access Control
$app->ACL = new ACL($app);

//load the controller
$app->Router->loadController();


?>