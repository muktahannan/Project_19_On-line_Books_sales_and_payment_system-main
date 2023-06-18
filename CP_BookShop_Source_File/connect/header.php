<?php 
ob_start();
session_start();

include("database/connection.php");?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8" />
  <title>Home Page </title>
  <link href="style.css" rel="stylesheet" type="text/css">
   </head>
<body>
<div id="wrapper">
	<div id="header">
	
		<div id="logo"><img src="photo/logo.png" alt="logo" width="100" height="100">
		</div>
		<div id="banner"><img src="photo/banner.jpg" alt="logo" width="900" height="100">
		</div>
		<div id="menu">
				<ul>
							<li><a href="index.php"> Home Page </a></li>
							<li><a href="contact_us.php"> Contact us </a></li>
							
						    <li><a href="cart.php"> Cart </a></li>
							
			</ul>
		</div>
	</div>

	<div id="container">