<?php
// FRONT CONTROLLER
// General settings
ini_set('display_errors',1);
error_reporting(E_ALL);

// Including core files
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// Connecting to Database

// Call the Router
$router = new Router();
$router->run();

//include 'init.php';
//include 'res/template.php';
 
