<?php 
	$this->load->helper('url');
?>
<!DOCTYPE HTML>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Grégoire Duché Showcase - Code Igniter</title>
			<link rel="stylesheet" href="<?php echo base_url();?>ux/css/main.css" type="text/css" media="screen" />
		</head>
	<body>
	<header>
		<section>
			<h1><a href="<?php echo base_url();?>">Grégoire Duché</a></h1>
			<h2>Front and Back end developer</h2>
		</section>
		<nav>
			<ul>
				<li><a href="<?php echo base_url();?>">Home</a></li>
				<li><a href="<?php echo site_url("pages/view/employee");?>">As an employee</a></li>
				<li><a href="<?php echo site_url("pages/view/freelance");?>">As a freelance</a></li>
			</ul>
		</nav>
	</header>
	<div id="main">
