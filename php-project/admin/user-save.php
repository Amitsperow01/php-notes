<?php 

require_once("config.php");

// dd($dbEmail);

$data = $_POST;

// print_r($confirmPpassword);
// dd($data);
// die();

$name = $data["name"];
$email = $data["email"];
$phone = $data["phone_number"];
$gender = $data["gender"];
$designation = $data["designation"];
$password = md5($data["password"]);
$confirmPpassword = md5($data["confirm_password"]);

$_SESSION["fName"] = $data["name"];
$_SESSION["fEmail"] = $data["email"];
$_SESSION["phoneNumber"] = $data["phone_number"];
$_SESSION["genders"] = $data["gender"];
$_SESSION["designations"] = $data["designation"];

$isError = false;


$selectQuerys = "SELECT * FROM `users` WHERE email='$email'";
$dataQuery = $conn->query($selectQuerys);
// dd($dataQuery);
if(!$dataQuery->num_rows && ($password === $confirmPpassword)){
    $inserQuery = "INSERT INTO `users` (name, email, phone, gender, designation, password) VALUES ('$name', '$email', '$phone', '$gender', '$designation', '$password')";
} 



if($dataQuery->num_rows) {
    $isError = true;
    $_SESSION["email_error"] = "Email already exist.please try again";
}

if(!($password === $confirmPpassword)) {
    $isError = true;
    $_SESSION["password_error"] = "Password & confirm password do not match";
}

if($name == "") {
    $isError = true;
    $_SESSION["name_error"] = "Name is a required field.";
}


if($email == "") {
    $isError = true;
    $_SESSION["email_error"] = "Email is a required field.";
}

if($phone == "") {
    $isError = true;
    $_SESSION["phone_number_error"] = "Phone is a required field.";
}

if($gender == "") {
    $isError = true;
    $_SESSION["gender_error"] = "Gender is a required field.";
}

if($designation == "") {
    $isError = true;
    $_SESSION["designation_error"] = "Designation is a required field.";
}

if($data["password"] == "") {
    $isError = true;
    $_SESSION["password_error"] = "Password is a required field.";
}


if($isError) {
    header("location:user-add.php");
    exit();
}



if($conn->query($inserQuery)) {
    $_SESSION["success"] = "User add successfully...";
    header("location: user-list.php");
    unset($_SESSION["fName"]); 
    unset($_SESSION["fEmail"]); 
    unset($_SESSION["phoneNumber"]); 
    unset($_SESSION["genders"]); 
    unset($_SESSION["designations"]); 
    
} else {
    $_SESSION["error"] = "Something wrong. please try again...";
    header("location: user-add.php");
}









?>