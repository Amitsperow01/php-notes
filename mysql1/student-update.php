<?php
require_once("config.php");

$data = $_POST;

$isError = false;
echo "<pre>";
echo "Form Updated.";
echo "<br>";
$id = $data['id'];
$first_name = $data["first_name"];
$last_name = $data["last_name"];
$email = $data["email"];
$mobile_number = $data["mobile_number"];
$gender = $data["gender"];
$date_of_birth = $data["date_of_birth"];
$address = $data["address"];
$city = $data["city"];
$pin_code = $data["pin_code"];
$state = $data["state"];
$country = $data["country"];
$hobbies = implode(",", $data["hobbies"]);
$other_hobbies = $data['other_hobbies'];
$qualification = implode(",", $data["qualification"]);
$course = $data["course"];




$_SESSION["first_name"] = $data["first_name"];
$_SESSION["last_name"] = $data["last_name"];
$_SESSION["email"] = $data["email"];
$_SESSION["mobile_number"] = $data["mobile_number"];
$_SESSION["gender"] = $data["gender"];
$_SESSION["date_of_birth"] = $data["date_of_birth"];
$_SESSION["address"] = $data["address"];
$_SESSION["city"] = $data["city"];
$_SESSION["pin_code"] = $data["pin_code"];
$_SESSION["state"] = $data["state"];
$_SESSION["country"] = $data["country"];
$_SESSION["hobbies"] = $data["hobbies"];
$_SESSION["other_hobbies"] = $data["other_hobbies"];
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
if ($data["date_of_birth"] == "") {
	$isError = true;
	$_SESSION['date_of_birth_error'] = "date_of_birth_required field";
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
	header("location:student-edit.php?id=$id");
	exit();
}

$updQuery = "UPDATE`student-list` SET first_name='$first_name',last_name='$last_name',email='$email',mobile_number='$mobile_number',gender='$gender',date_of_birth='$date_of_birth',address='$address',city='$city',pin_code=$pin_code,state='$state',country='$country',hobbies='$hobbies', other_hobbies='$other_hobbies', qualification='$qualification', course='$course' WHERE id=$id ";

if ($con->query($updQuery)) {

	unset($_SESSION["first_name"]);
	unset($_SESSION["last_name"]);
	unset($_SESSION["email"]);
	unset($_SESSION["mobile_number"]);
	unset($_SESSION["gender"]);
	unset($_SESSION["date_of_birth"]);
	unset($_SESSION["address"]);
	unset($_SESSION["city"]);
	unset($_SESSION["pin_code"]);
	unset($_SESSION["state"]);
	unset($_SESSION["country"]);
	unset($_SESSION["hobbies"]);
	unset($_SESSION["other_hobbies"]);
	unset($_SESSION["qualification"]);
	unset($_SESSION["course"]);



	if ($con->query($updQuery)) {
		$_SESSION['success'] = "Updated Sussessfully ...";
	} else {
		$_SESSION["error"] = "Error try again.....";
	}
	header("location:student-form.php");

    }
?>