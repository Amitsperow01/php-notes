<?php

session_start();

$data = $_POST;
$isError = false;
echo "<pre>";
echo "Form Subbmited.";
echo "<br>";
print_r($data);


$_SESSION["first_name"] = $data["first_name"];
$_SESSION["last_name"] = $data["last_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["mobile_number"] = $data["mobile_number"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["dob_day"] = $data["dob_day"];
$_SESSION["dob_month"] = $data["dob_month"];
$_SESSION["dob_year"] = $data["dob_year"]; 
$_SESSION["address"] = $data["address"];
$_SESSION["city"] = $data["city"];
$_SESSION["pin_code"] = $data["pin_code"];
$_SESSION["state"] = $data["state"];
$_SESSION["country"] = $data["country"];
$_SESSION["hobbies"] = $data["hobbies"];
$_SESSION['other_hobbies'] = $data['other_hobbies'];
$_SESSION["qualification"] = $data["qualification"];
$_SESSION["course"] = $data["course"];

if ($data["first_name"] == "") {
	$isError = true;
	$_SESSION["first_name_error"] = "First Name is a required field";
}
if ($data["last_name"] == "") {
	$isError = true;
	$_SESSION["last_name_error"] = "Last Name is a required field";
}
if ($data["email"] == "") {
	$isError = true;
	$_SESSION["email_error"] = "Email ID is a required field";
}
if ($data["mobile_number"] == "") {
	$isError = true;
	$_SESSION["mobile_number_error"] = "Mobile Number is a required field";
}
if ($data["gender"] == "") {
	$isError = true;
	$_SESSION["gender_error"] = "Gander is a required field";
}
if (!($data["dob_day"] && ($data["dob_month"]) && ($data["dob_year"]))) {
	$isError = true;
	$_SESSION["dob_day_error"] = "Date Of Birth is a required field";
}
if ($data["address"] == "") {
	$isError = true;
	$_SESSION["address_error"] = "Address is a required field";
}
if ($data["city"] == "") {
	$isError = true;
	$_SESSION["city_error"] = "city is a required field";
}
if ($data["pin_code"] == "") {
	$isError = true;
	$_SESSION["pin_code_error"] = "Pin Code is a required field";
}
if ($data["state"] == "") {
	$isError = true;
	$_SESSION["state_error"] = "State is a required field";
}
if ($data["country"] == "") {
	$isError = true;
	$_SESSION["country_error"] = "Country is a required field";
}
if ($data["hobbies"] == "") {
	$isError = true;
	$_SESSION["hobbies_error"] = "Hobbies is a required field";
}
if ($data["qualification"] == "") {
	$isError = true;
	$_SESSION["qualification_error"] = "Qualification is a required field";
}
if ($data["course"] == "") {
	$isError = true;
	$_SESSION["course_error"] = "Course is a required field";
}


if ($isError) {
	header("location:form.php");
}



?>