<?php
ob_start();
session_start();
include("database/connection.php");
if(isset($_SESSION["name"])){
header("location:index.php");
}
?>
<!doctype html>
<html>
  <head>
    <title>Login</title>
	<link href="admin_style.css" rel="stylesheet" type="text/css">
  </head>
  <body bgcolor="green"><center>
    <div id="admin_wrapper">
	<div id="login">
  <form action ="" method="post">
  <table>
  <tr><td colspan="2"><h1 style="text-align:center">Login</h1><h2 style="color:red">
  <?php
  if(isset($_POST["btn"])){
  $sql=mysql_query("select * from admin where email='".$_POST["email"]."' and password='".$_POST["password"]."'");
  if(mysql_num_rows($sql)==0){
  echo "Invalid Email/password";
  }
  else{
  $row=mysql_fetch_array($sql);
  $_SESSION["name"]=$row["name"];
  }
  }
  
  ?>
  </h2>
  </td></tr>
	<tr><td><p>Email</p></td><td><input type = "text" name = "email"></td></tr>
    <tr><td> <p>Password</p></td><td><input type = "password" name = "password"></td></tr>
     
     <tr><td></td><td><input type = "submit" name="btn" value = "login"></td></tr>
     <table>
	 <div>
    </div>
	</center>
  </body>
</html>
