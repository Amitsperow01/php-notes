<?php 
require_once("config.php");

$data = $_POST;

date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)


$target_dir = "uploads/";
$imgBaseName = date('Ymdhis').basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgBaseName;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);



$_name = $data["name"];
$_ordering = $data["ordering"];
$_status = $data["status"];


$insertQuery = "INSERT INTO `sliders` (title, ordering, status, image) VALUES('$_name', $_ordering, $_status, '$target_file')";
// echo $insertQuery;
// $conn->query($insertQuery);


if($conn->query($insertQuery)) {
    $_SESSION["success"] = "Slider add successfully...";
    header("location:slider-list.php");
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
    header("location:slider-add.php");
}





?>