<?php 
require_once("config.php");

$data = $_POST;

$email = $data["email"];
$password = md5($data["password"]);

// dd($dataQuery);

$selectQuery = "SELECT * FROM users WHERE email='$email' and password='$password'";
// dd($selectQuery);
$dataQuery = $conn->query($selectQuery);

// dd($dataQuery);

// $getData = mysqli_fetch_assoc($dataQuery);

// dd($getData["id"]);

if($dataQuery->num_rows) {
    $getData = mysqli_fetch_assoc($dataQuery);
    $_user_id = $getData["id"];
    $_SESSION["user_id"] = $getData["id"];
    $_SESSION["name"] = $getData["name"];
    $_SESSION["email"] = $getData["email"];

    $insertQuery = "INSERT INTO `user_logs` (user_id) VALUES ($_user_id)";
    $conn->query($insertQuery);

    $_SESSION["success"] = "Login successfully...";
    header("location:dashboard.php");
} else {
    $_SESSION["error"] = "Credentials are not valid...";
    header("location:index.php");
}


?>