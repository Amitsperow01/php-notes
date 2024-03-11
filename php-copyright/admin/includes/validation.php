<?php 
if(!(isset($_SESSION["name"]) && isset($_SESSION["email"]))) {
    $_SESSION["error"] = "You have to login first...";
    header("location:index.php");
} ?>