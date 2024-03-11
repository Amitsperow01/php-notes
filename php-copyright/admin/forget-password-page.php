<?php
require_once("config.php");

// dd($_POST);

$_email = $_POST["email"];

// dd($_email);
$selectQuery = "SELECT email FROM users WHERE email='$_email'";

$userRec = $conn->query($selectQuery);


if ($userRec->num_rows) {
    // echo "true";
    $tokenNo = random_str(32);
    // echo $tokenNo;

    $updateQuery = "UPDATE `users` SET password_token='$tokenNo' WHERE email='$_email'";
    $conn->query($updateQuery);
    $a = "update-password.php?token=" . $tokenNo;
    $_SESSION["success"] = "Youre email id has been sent!";
    header("location:{$a}");
    exit();

} else {
    // echo "false";
    $_SESSION["error"] = "Email did not match!";
    header("location:forget-password.php");
    exit();
}



// password_token


?>
