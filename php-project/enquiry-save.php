<?php 
require_once("admin/config.php");

$data = $_POST;


$_name = $data["name"];
$_email = $data["email"];
$_phone = $data["phone"];
$_message = $data["message"];

$insertQuery = "INSERT INTO `enquiries` (name, email, phone, message) VALUES ('$_name', '$_email', '$_phone', '$_message')";



if($conn->query($insertQuery)) {
    $_SESSION["success"] = "Slider add successfully...";
    header("location:contact.php");
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
    header("location:contact.php");
}



?>