<?php 
require_once("config.php");


$school_id = $_GET["school_id"];

$deleteQuery = "DELETE FROM `school` WHERE id=$school_id";
$conn->query($deleteQuery);




?>