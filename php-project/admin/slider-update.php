<?php 
require_once("config.php");

date_default_timezone_set("Asia/Calcutta");

$target_dir = "uploads/";
$imgBaseName = date("Ymdhis").basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgBaseName;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$img = $_FILES["image"]["name"];

$data = $_POST;
$id = $data["slider_id"];
$_name = $data["name"];
$_ordering = $data["ordering"];
$_status = $data["status"];

if(!$img) {
    $updateQuery = "UPDATE `sliders` SET title='$_name', ordering=$_ordering, status=$_status WHERE id=$id";
} else {
    $updateQuery = "UPDATE `sliders` SET title='$_name', ordering=$_ordering, status=$_status, image='$target_file' WHERE id=$id";
}

if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Update successfully...";
    header("location:slider-list.php");
} else {
    $_SESSION["error"] = "Something wrong.please try again...";
    header("location:slider-edit.php");
}





?>