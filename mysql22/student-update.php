<?php
require_once("config.php");

$data=$_POST;

$id=$data['id']??0;

$name=$data["name"];
$email=$data["email"];
$gender=$data["gender"];
$phone=$data["phone"];
$address=$data["address"];


$updQuery="UPDATE `first_table` SET name='$name',email='$email',gender='$gender',phone='$phone',address='$address' WHERE id=$id";
echo $updQuery;	
// if($con->query($updQuery)){
// 	$_SESSION['updated']="updated Successfully...";
// }else{
// 	$_SESSION["Error"]= "Error...";
// }
// header("location:student.php");
?>