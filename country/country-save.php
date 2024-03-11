<?php

require_once("config.php");

$data = $_POST;
$isError = false;

$name = $data['name'];
$status = $data['status'];
$state_name = $data["state_name"];
$sta_status = $data['state_status'];

$_SESSION["name"] = $data["name"];
$_SESSION["status"] = $data["status"];
$_SESSION["state_name"] = $data["state_name"];
$_SESSION["state_status"] = $data["state_status"];

 

$contryQuery = "INSERT INTO `countries`(name, status) VALUE ('$name',$status)";

$con->query($contryQuery);
$country_id = $con->insert_id;

foreach ($state_name as $key => $state_val) {
	$ststatus = $sta_status[$key];
	
	$stateQuery = "INSERT INTO `states`(country_id, name, status) VALUES ($country_id, '$state_val',$ststatus)";
	
	$con->query($stateQuery);
}



if ($data["name"] == "") {
	$isError = true;
	$_SESSION["name_error"] = " Name is a required field";
}
if ($data["status"] == "") { 
	$isError = true;
	$_SESSION["status_error"] = "Status is a required field";
}
if ($data["state_name"] == "") {
	$isError = true;
	$_SESSION["state_name_error"] = "State_name is a required field";
}
if ($data["state_status"] == "") {
	$isError = true;
	$_SESSION["state_status_error"] = "State_status is a required field";
}if ($isError) {
	header("location:country-add.php");
	exit();
}



if ($data['save']) {
	unset($_SESSION["name"]);
unset($_SESSION["status"]);
unset($_SESSION["state_name"]);
unset($_SESSION["state_status"]);
header("location:country-list.php");
$_SESSION["success"] = "Student Added Successfully.....";
exit();

} elseif ($data['save_new']) {
	unset($_SESSION["name"]);
unset($_SESSION["status"]);
unset($_SESSION["state_name"]);
unset($_SESSION["state_status"]);
	// $_SESSION["error"] = "Somthing Happing Wrong.....";
	header("location:country-add.php");
	exit();
}


?>