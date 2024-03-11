<?php 
session_start();


unset($_SESSION["name"]);
unset($_SESSION["email"]);

$_SESSION["success"] = "Logged out successfully...";

header("location:index.php");


?>