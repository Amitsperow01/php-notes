<?php

require_once("config.php");


$data = $_POST;

$id=$data['id'];
$country_id = $data['country_id'];
$state_id = $data['state_id'];
$city_name = $data['name'];
$status = $data['status'];

$updQuery="UPDATE `cities` SET country_id=$country_id, state_id='$state_id',name='$city_name', status=$status WHERE id=$id";

$con->query($updQuery);

header("location:city-list.php");


?>