<?php 
ob_start();
session_start();
include("database/connection.php");
if(isset($_SESSION["name"])==""){
header("location:login.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<link href="style.css" rel="stylesheet" type="text/css"> 
<title> Customer Form </title>
</head>
<body>
<div id="wrapper">
	<div id="header">
	
		<div id="logo"> <img src="photo/logo.png" alt="" width="100" height="100"> </div>
		<div id="banner"> <img src="photo/banner.jpg" alt="" width="900" height="100"> </div>
		<div id="menu">
				<ul>
							<li><a href="index.php"> Admin HOMe </a></li>
							
			</ul>
		</div>
	</div>

	<div id="container">