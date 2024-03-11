<?php 
require_once("config.php");

$data = $_POST;

$id = $data["page_id"]; 
// dd($id);
$_title = $data["name"]; 
$_heading = $data["heading"]; 
$_ordering = $data["ordering"]; 
$_status = $data["status"]; 
$_url_key = $data["url_key"]; 
$_description = $data["description"]; 

$img = $_FILES["image"]["name"];

date_default_timezone_set("Asia/Calcutta");

$target_dir = "uploads/";
$imgBaseName = date("Ymdhis").basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgBaseName;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);




if(!$img) {
    $updateQuery = "UPDATE pages SET title='$_title', heading='$_heading', ordering=$_ordering, status=$_status, url_key='$_url_key', description='$_description' WHERE id=$id";
} else {
    $updateQuery = "UPDATE pages SET title='$_title', heading='$_heading', ordering=$_ordering, status=$_status, url_key='$_url_key', description='$_description', banner_image='$target_file' WHERE id=$id";
}


if($conn->query($updateQuery)) {
    $_SESSION["success"] = "Update successfully...";
    header("location:page-list.php");
    
} else {
    $_SESSION["error"] = "Something wrong.please try again...";
    header("location:page-edit.php");
}



?>