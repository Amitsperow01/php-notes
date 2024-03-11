<?php

require_once("config.php");

$data = $_POST;
// dd($data);
$id = $data['id'];
$name = $data['country'];
$status = $data['status'];

$stateid = ($data['state_id'])??[];
$statename = $data["state_name"]??[];
$sta_status = $data['state_status']??[];
$stimpl = implode(",", $stateid);

$updQuery = "UPDATE `countries` SET name='$name', status=$status WHERE id=$id";
$con->query($updQuery);

 if (empty($stateid)) {
	$dellQuery = "DELETE FROM `states` WHERE country_id=$id";
	$con->query($dellQuery);
 }else{
	 $delQuery = "DELETE FROM `states` WHERE id NOT IN($stimpl)and country_id=$id";
	$con->query($delQuery);
}


foreach ($statename as $key => $stvalue) {
	$stdid = $stateid[$key] ?? 0;
	$stStatus = $sta_status[$key];
	if ($stdid) {
		$stQuery = "UPDATE `states` SET name='$stvalue', status=$stStatus WHERE id=$stdid";
		$con->query($stQuery);

	} else {
		$insertQuery = "INSERT INTO `states` (name, status, country_id) VALUES ('$stvalue', $stStatus, $id)";
		$con->query($insertQuery);
	}
}

if ($stdid) {
	if ($con->query($updQuery)) {
		$_SESSION["success"] = "Country Update success...";
	} else {
		$_SESSION["error"] = "Something wrong with update...";
	}
} else {
	$_SESSION["error"] = "Somethign wrong, please try again...";
}


header("location:country-list.php");

// Here is another way to run the query above
// for($i = 0; $i < count($state_name); $i++ ) {
//     $staName = $state_name[$i];
//     echo $stateQuery = "UPDATE states SET name='$staName' WHERE id=$state_id";
//     $conn->query($stateQuery);
// }

?>