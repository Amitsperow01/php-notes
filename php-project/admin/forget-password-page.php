<?php 
require_once("config.php");

// dd($_POST);

$_email = $_POST["email"];

// dd($_email);
$selctQuery = "SELECT email FROM users WHERE email='$_email'";

$userRec = $conn->query($selctQuery);
// echo $userRec;
// dd($userRec);

if($userRec->num_rows) {
    echo "true";
} else {
    echo "false";
}



?>