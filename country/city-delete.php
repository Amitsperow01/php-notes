<?php
require_once("config.php");

$id= $_GET["id"];
if($id){
   $delQuery="DELETE FROM `cities` WHERE id=$id";
   if($con->query($delQuery)){
	   $_SESSION["success"] = "City Data Deleted Successfully...";
   }else{
	   $_SESSION["error"] = "Somthing Wrong...";
}
}else{
   $_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}

header("location:city-list.php");
?>