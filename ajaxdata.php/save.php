<?php
require_once("config.php");

$editId = $_POST["edit_id"];
$nameData = $_POST["name"];
$marksData = $_POST["marks"];
$gradeData = $_POST["grade"];
$cityData = $_POST["city"];

if($editId) {
     $updateQuery = "UPDATE `school` SET name='$nameData', marks=$marksData, grade='$gradeData', city='$cityData' WHERE id=$editId";
     $conn->query($updateQuery);
} 
else {
     $insertQuery = "INSERT INTO `school` (name, marks, grade, city) VALUES ('$nameData', $marksData, '$gradeData', '$cityData')"; 
     $conn->query($insertQuery);
}


