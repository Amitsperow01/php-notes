<?php 
require_once("config.php");

$id = $_GET["id"];

$deleteQuery = "DELETE FROM `blocks` WHERE id=$id";

if($conn->query($deleteQuery)) {
    $_SESSION["success"] = "Delete successfully...";
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
}

header("location:block-list.php");

?>