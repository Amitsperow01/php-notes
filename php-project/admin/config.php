<?php 
session_start();

function dd($data) {
   echo "<pre>";
   print_r($data);
   echo "</pre>";
   die();
}



$host = "localhost";
$username = "root";
$password = "";
$dbName = "php_project";

$conn = mysqli_connect($host, $username, $password, $dbName);

if(!$conn) {
   echo "Connection faild";
    die();
} 



?>