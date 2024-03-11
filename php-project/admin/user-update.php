<?php 
require_once("config.php");


$data = $_POST;
$id = $data["user_id"];
$name = $data["name"];
$email = $data["email"];
$phone = $data["phone_number"];
$gender = $data["gender"];
$designation = $data["designation"];
$password = $data["password"];

if($password) {
    $updateQuery = "UPDATE `users` SET name='$name', email='$email', phone='$phone', gender='$gender', designation='$designation', password='$password' WHERE id=$id";
} else {
    $updateQuery = "UPDATE `users` SET name='$name', email='$email', phone='$phone', gender='$gender', designation='$designation' WHERE id=$id";
}



if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Update successfully...";
    header("location: user-list.php");
} else {
    $_SESSION["error"] = "Something wrong.please try again...";
    header("location: user-edit.php");
}






?>