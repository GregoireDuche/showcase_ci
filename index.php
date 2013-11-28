<?php

	require 'config.php';

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

