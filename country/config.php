<?php

session_start();

function dd( $data ) {
	echo"<pre>";
	print_r($data);
	die();
}

$host="localhost";
$username="root";
$password= "";
$database= "country";

$con=mysqli_connect($host,$username,$password,$database);

if(!$con){
	echo "Data Not Established";
die();
}
?>