<?php 
require_once("config.php");

$_id = $_POST["id_s"];


$updateQuery = "UPDATE enquiries SET status=2 WHERE id=$_id";
$conn->query($updateQuery);

?>

<button class="btn btn-success">Read</button>    


