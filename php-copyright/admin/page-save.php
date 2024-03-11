<?php
require_once("config.php");

$data = $_POST;

// $_url_key = $data["url_key"];
// $_name = $data["name"];
// // dd($_name);
// $test = $_url_key ? $_url_key : $_name;
// $test1 = str_replace(" ", "-", $test);
// echo $test1;
// echo "<br>";
// echo strtolower($test1);
// die();


date_default_timezone_set("Asia/Calcutta");

$target_dir = "uploads/";
$imgBaseName = date("Ymdhis") . basename($_FILES["image"]["name"]);
$target_file = $target_dir . $imgBaseName;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


$_name = $data["name"];
$_heading = $data["heading"];
$_ordering = $data["ordering"];
$_status = $data["status"];
$_url_key = $data["url_key"];
$_description = $data["description"];


$url_key_or_name = $_url_key ? $_url_key : $_name;

$url_key_wspace = str_replace(" ", "-", $url_key_or_name);

$url_key = strtolower($url_key_wspace);



$insertQuery = "INSERT INTO `pages` (title, heading, ordering, status, url_key, banner_image, description) VALUES ('$_name', '$_heading', $_ordering, $_status, '$url_key', '$target_file', '$_description')";


// if ($_url_key) {
// } else {
//     $insertQuery = "INSERT INTO `pages` (title, heading, ordering, status, url_key, banner_image, description) VALUES ('$_name', '$_heading', $_ordering, $_status, '$name_key_lower', '$target_file', '$_description')";
// }
// echo $insertQuery;
// die();

if ($conn->query($insertQuery)) {
    $_SESSION["success"] = "Slider add successfully...";
    header("location:page-list.php");
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
    header("location:page-add.php");
}
// FEATURE
