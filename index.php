<?php
/**
 * @author Grégoire Duché
 * Index file for the showcase application. Used to configurate your Code Igniter framework and some constants.
 * Report to the README file for more details.
 * */

	// Constants 
	require 'config.php';

	// The framework.php file links to the Code Igniter directory
	if (!file_exists('framework.php')) {
		echo 'You have to create a framework.php file with the link to Code Igniter framework directory.';
		exit();
	} 
	
	require 'framework.php';
	if (!file_exists($framework)) {
		echo 'The configuration of the path to Code Igniter directory is wrong.';
		exit();
	}
	
	require $framework;
?>

