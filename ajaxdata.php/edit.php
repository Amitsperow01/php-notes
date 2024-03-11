<?php 
require_once("config.php");
$id = $_GET['sch_id'];

$selQuery = "SELECT * FROM school where id=$id";

$stData = $conn->query($selQuery);


echo json_encode(mysqli_fetch_assoc($stData));

?>