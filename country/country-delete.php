<?php
require_once("config.php");

$id= $_GET["id"];
// if($id){
//    $delQuery="DELETE FROM `country-list` WHERE id=$id" ; "DELETE FROM `states` WHERE country_id=$id";
//    if($con->query($delQuery)){
// 	   $_SESSION["success"] = "Country Data Deleted Successfully...";
//    }else{
// 	   $_SESSION["error"] = "Somthing Wrong...";
// }
// }else{
//    $_SESSION["error"] = "Somthing Wrong.Please Try Again....";
// }


$delcont="DELETE FROM `countries` WHERE id=$id" ;
$con->query($delcont);

$delstate="DELETE FROM `states` WHERE country_id=$id" ;
$con->query($delstate);

$delcity="DELETE FROM `cities` WHERE country_id=$id" ;
$con->query($delcity);

header("location:country-list.php");

?>