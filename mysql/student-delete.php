<?php
 require_once("config.php");

 $id= $_GET["id"];
 if($id){
	$delQuery="DELETE FROM `first_table` WHERE id=$id";
	if($con->query($delQuery)){
		$_SESSION["success"] = "Record Deleted Successfully...";
	}else{
		$_SESSION["error"] = "Somthing Wrong...";
 }
}else{
	$_SESSION["error"] = "Somthing Wrong.Please Try Again....";
}

header("location:student-list.php");
?>
