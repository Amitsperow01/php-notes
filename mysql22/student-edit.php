<?php
require_once("config.php");

$id = $_GET['id'] ?? 0;

if ($id) {
	$selQuery = "SELECT* FROM `first_table` WHERE id=$id";
	$studRecd = $con->query($selQuery);
	if (!$studRecd->num_rows) {
		$_SESSION["Error"] = "Something Error..";
		header("location:student.php");
		exit();
	}
	$_student = mysqli_fetch_assoc($studRecd);
} else {
	$_SESSION["Error"] = "Something Error..";
	header("location:student.php");
	exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update data</title>

</head>

<body>
	<h2>Update data</h2>
	<form action="student-update.php" method="post">
		<input type="hidden" name="id" >
		<table cellpadding="10">
			<tr>
				<td>Name</td>
				<td><input type="name" name="name" maxlength="50"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" maxlength="50"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="m">M<br>
					<input type="radio" name="gender" value="f">F
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="tel" name="phone" maxlength="50"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address" maxlength="50"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="reset">Reset</button>&nbsp;
					<button type="submit">submit</button>

				</td>
			</tr>

		</table>

	</form>
</body>

</html>