<?php 
require_once("config.php");
$id = $_GET["id"];

$deleteQuery = "DELETE FROM `sliders` WHERE id=$id";
// $conn->query($deleteQuery);

if($conn->query($deleteQuery)) {
    $_SESSION["success"] = "Delete successfully...";
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
}
header("location:slider-list.php");

?>