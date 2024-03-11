<?php
require_once("config.php");

$data=$_POST;
// echo "<pre>";
// print_r($data);

$name= $data["name"];
$email= $data["email"];
$gender= $data["gender"];
$phone= $data["phone"];
$address= $data["address"];

$insertQuery="INSERT INTO `first_table` (name,email,gender,phone,address)VALUE('$name','$email','$gender','$phone','$address')";
$con->query($insertQuery);

header("location:student.php");

?>