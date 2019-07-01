<?php 
	
	//FRONT CONTROLLER
	
	// 1. All settings
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// 2.Connected files system

	define('ROOT', dirname(__FILE__));
	include_once(ROOT.'/components/Router.php');

	// 3.Setting connection database

	// 4.Call Router

	$router = new Router();
	$router->run();

?>