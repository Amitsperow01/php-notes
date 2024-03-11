<?php
require_once("config.php");

$data = $_POST;

$_create_password = md5($data["create_password"]);
$_confirm_password = md5($data["confirm_password"]);
// dd($_create_password);


$_token = $data["token"];

if ($_create_password === $_confirm_password) {
    $updateQuery = "UPDATE users SET password='$_create_password' WHERE password_token='$_token'";
    $conn->query($updateQuery);
    $_SESSION["success"] = "Password has been updated!";
    header("location:index.php");
    exit();
} else {
    $_SESSION["error"] = "Confirm password not matched!";
    header("location:update-password.php?token={$_token}");
    // exit();
}


