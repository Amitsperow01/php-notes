<?php

require_once("config.php");

$data = $_POST;

$id = $data['id'];
$country_id = $data['country_id'];
$state = $data['name'];
$status = $data['status'];

$cityid = $data['city_id']??[];

$city_name = $data["city_name"]??[];
$city_status = $data['city_status']??[]; 
$ctyimpl = implode(",", $cityid);

$updQuery = "UPDATE `states` SET country_id=$country_id, name='$state', status=$status WHERE id=$id";
$con->query($updQuery);

if(empty($cityid)) {
	$dellQuery="DELETE FROM `cities` WHERE  state_id=$id";
	$con->query($dellQuery);
}else{
$delQuery="DELETE FROM `cities` WHERE id NOT IN($ctyimpl)And state_id=$id";
$con->query($delQuery);
}


foreach ($city_name as $key => $ctyName) {
	$ctyId = $cityid[$key] ?? 0;
	$ctyStatus = $city_status[$key];

	if ($ctyId) {
		$cityUpdate = "UPDATE `cities` SET name='$ctyName', status=$ctyStatus WHERE id=$ctyId";
		$con->query($cityUpdate);
	} else {
		$cityUpdate = "INSERT INTO `cities` (country_id, state_id, name, status ) VALUES ($country_id, $id, '$ctyName', $ctyStatus)";

		$con->query($cityUpdate);
	}
}


if ($id) {
	if ($con->query($updQuery)) {
		$_SESSION["success"] = "Record Update successfully..";
	} else {
		$_SESSION["error"] = "Something wrong...";
	}
} else {
	$_SESSION["error"] = "Id not found. please try again..";
}


header("location:state-list.php");

?>