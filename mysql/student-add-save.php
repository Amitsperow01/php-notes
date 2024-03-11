<?php
require_once("config.php");

$data = $_POST;
$isError = false;
echo "<pre>";
echo "Form Subbmited.";
echo "<br>";
print_r($data);

$name = $data["name"];
$email = $data["email"];
$gender = $data["gender"];
$phone = $data["phone"];
$address = $data["address"];

$_SESSION["name"] = $data["name"];
$_SESSION["email"] = $data["email"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["phone"] = $data["phone"];
$_SESSION["address"] = $data["address"];

if ($data["name"] == "") {
	$isError = true;
	$_SESSION["name_error"] = "Last Name is a required field";
}
if ($data["email"] == "") {
	$isError = true;
	$_SESSION["email_error"] = "Email ID is a required field";
}
if ($data["gender"] == "") {
	$isError = true;
	$_SESSION["gender_error"] = "Gander is a required field";
}
if ($data["phone"] == "") {
	$isError = true;
	$_SESSION["phone_error"] = "Mobile Number is a required field";
}
if ($data["address"] == "") {
	$isError = true;
	$_SESSION["address_error"] = "Address is a required field";
}
if ($isError) {
	header("location:student-add.php");
	exit();
}

$instQuery = "INSERT INTO `first_table`(name, email,gender,phone,address)VALUE('$name','$email','$gender','$phone','$address')";

if ($con->query($instQuery)) {

	unset($_SESSION["name"]);
	unset($_SESSION["email"]);
	unset($_SESSION["phone"]);
	unset($_SESSION["gender"]);
	unset($_SESSION["address"]);

	$_SESSION["success"] = "Student Added Successfully.....";
	header("location: student-list.php");

} else {
	$_SESSION["error"] = "Somthing Happing Wrong.....";
	header("location: student-add.php");

}