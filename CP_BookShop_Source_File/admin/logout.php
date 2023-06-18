<?php 
ob_start();
session_start();
if(isset($_SESSION["name"])){
session_destroy();
header("location:index.php");
}
include("database/connection.php");

?>