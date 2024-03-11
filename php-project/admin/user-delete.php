<?php 
require_once("config.php");

$data = $_POST;

$id = $_GET["id"];

// echo $id;

$deleteQuery = "DELETE FROM `users` WHERE id=$id";
// $conn->query($deleteQuery);

if($conn->query($deleteQuery)) {
    $_SESSION["success"] = "Delete successfully...";
} else {
    $_SESSION["error"] = "Something wrong.please try again...";
}

header("location:user-list.php");











?>