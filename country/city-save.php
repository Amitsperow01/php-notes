<?php

require_once("config.php");


$data = $_POST;

$country_id = $data['country_id'];
$state_id = $data['state_id'];
$city_name = $data['name'];
$status = $data['status'];

$cityQuery = "INSERT INTO `cities`(country_id, state_id, name, status) VALUE ($country_id, $state_id, '$city_name', $status)";

$con->query($cityQuery);

header("location:city-list.php");

?>