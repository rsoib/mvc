<?php 
	
	//FRONT CONTROLLER
	

	$string = date('d-m-Y');

	$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

	$replacement = '$1 - уми $2 - и соли $3 ';

	echo preg_replace($pattern, $replacement, $string);

	
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