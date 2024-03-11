<?php
require_once("config.php");

$data = $_POST;

$id = $data["block_id"];
$_title = $data["title"];
$_heading = $data["heading"];
$_ordering = $data["ordering"];
$_identifier = $data["identifier"];
$_status = $data["status"];
$_description = $data["description"];
$_image = $_FILES["image"]["name"];


date_default_timezone_set("Asia/Calcutta");
$target_dir = "uploads/";
$imgBaseName = date("Ymdhis") . basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgBaseName;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


if (!$_image) {
    echo $updateQuery = "UPDATE `blocks` SET title='$_title', identifier='$_identifier', heading='$_heading', description='$_description', ordering=$_ordering, status=$_status WHERE id=$id";
} else {
   echo  $updateQuery = "UPDATE `blocks` SET title='$_title', identifier='$_identifier', heading='$_heading', description='$_description', ordering=$_ordering, status=$_status, banner_image='$target_file' WHERE id=$id";
}

if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Update successfully...";
    header("location:block-list.php");
} else {
    $_SESSION["error"] = "Something wrong.please try again...";
    header("location:block-edit.php");
}


