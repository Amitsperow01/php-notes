<?php 
require_once("admin/config.php");

// dd($_POST);

$data = $_POST;

$_name = $data["name"];
$_email = $data["email"];
$_phone = $data["phone"];
$_message = $data["message"];


$insertQuery = "INSERT INTO `enquiries` (name, email, phone, message) VALUES ('$_name', '$_email', '$_phone', '$_message')";
// $conn->query($insertQuery);


if($conn->query($insertQuery)) {
    $_SESSION["success"] = "Query has been sent successfully!";     
    header("location:contact.php");
}


?>