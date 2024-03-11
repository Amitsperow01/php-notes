<?php
session_start();
$host="localhost";
$username="root";
$password= "";
$DataBaseName= "students";

$con=mysqli_connect($host,$username,$password, $DataBaseName);

if(!$con){
    echo "connection not established ...";
    die();
  }


?>