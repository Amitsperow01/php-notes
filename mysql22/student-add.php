<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>

</head>

<body>
	<form action="student-save.php" method="post">
		<table  cellpadding="10">
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
				<td><input type="radio" name="gender"  value= "m">M<br>
			<input type="radio" name="gender" value="f">F</td>
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