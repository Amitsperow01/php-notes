<?php

require_once("config.php");


$data = $_POST;
$isError = false;


$country_id = $data['country_id'];
$state = $data['name'];
$status = $data['status'];
$city_name = $data["city_name"];
$city_status = $data['city_status'];

$stateQuery = "INSERT INTO `states`(country_id, name, status) VALUES ($country_id, '$state', $status)";
$con->query($stateQuery);

$state_id = $con->insert_id;

foreach ($city_name as $key => $city_val) {
	$ctstatus = $city_status[$key];
	
	$cityQuery = "INSERT INTO `cities`(country_id, state_id, name, status) VALUES ($country_id, $state_id, '$city_val', $ctstatus)";
	
	$con->query($cityQuery);
}
if ($data["name"] == "") {
	$isError = true;
	$_SESSION["name_error"] = " Name is a required field";
}
if ($data["status"] == "") { 
	$isError = true;
	$_SESSION["status_error"] = "Status is a required field";
}
if ($data["city_name"] == "") {
	$isError = true;
	$_SESSION["city_name_error"] = "city_name is a required field";
}
if ($data["city_status"] == "") {
	$isError = true;
	$_SESSION["city_status_error"] = "city_status is a required field";
}if ($isError) {
	header("location:country-add.php");
	exit();
}

if($data['save'])
{
unset($_SESSION["name"]);
unset($_SESSION["status"]);
unset($_SESSION["city_name"]);
unset($_SESSION["city_status"]);
  header("location:state-list.php");
  exit();
  
}elseif($data['save_new']){
	unset($_SESSION["name"]);
unset($_SESSION["status"]);
unset($_SESSION["city_name"]);
unset($_SESSION["city_status"]);
	header("location:state-add.php");
	exit();

}

?>