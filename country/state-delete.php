<?php
require_once("config.php");

$id= $_GET["id"];
if($id){
   $delQuery="DELETE FROM `states` WHERE id=$id";

   if($con->query($delQuery)){
	   $_SESSION["success"] = "State Data Deleted Successfully...";
   }else{
	   $_SESSION["error"] = "Somthing Wrong...";
}
}else{
   $_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}

if($id){
   $delcity="DELETE FROM `cities` WHERE state_id=$id" ;

   if($con->query($delcity)){
	   $_SESSION["success"] = "State Data Deleted Successfully...";
   }else{
	   $_SESSION["error"] = "Somthing Wrong...";
}
}else{
   $_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}

header("location:state-list.php");
?>