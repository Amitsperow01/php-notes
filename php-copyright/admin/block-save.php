<?php 
require_once("config.php");

// dd($_POST);

$data = $_POST;

$_title = $data["title"];
$_heading = $data["heading"];
$_ordering = $data["ordering"];
$_identifier = $data["identifier"];
$_status = $data["status"];
$_description = $data["description"];


date_default_timezone_set("Asia/Calcutta");

$target_dir = "uploads/";
$imgBaseName = date("Ymdhis") . basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgBaseName;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);



// banner_image



$insertQuery = "INSERT INTO `blocks` (title, heading, description, status, ordering, identifier, banner_image) VALUES ('$_title', '$_heading', '$_description', $_status, $_ordering, '$_identifier', '$target_file')";

if($conn->query($insertQuery)) {
    $_SESSION["success"] = "Block add successfully...";
    header("location:block-list.php");
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
    header("location:block-add.php");

}



?>