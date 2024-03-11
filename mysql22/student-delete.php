<?php

require_once("config.php");


$id=$_GET["id"];

$delQuery="DELETE FROM `first_table` WHERE id=$id";

$con->query($delQuery);

header("location:student.php");

?>