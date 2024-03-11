<?php
require_once("config.php");

$id = $_GET['id'] ?? 0;


$setQuery = "SELECT * FROM `countries` WHERE id=$id";
$countrecd = $con->query($setQuery);
$_country = mysqli_fetch_assoc($countrecd);

$stateQuery = "SELECT * FROM `states` WHERE country_id=$id ";
$staterecd = $con->query($stateQuery);

// $_state = mysqli_fetch_assoc($staterecd);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<title>Country Add</title>
</head>

<body>
	<form action="country-update.php" method="post">
		<input type="hidden" name="id" value="<?= $_country["id"] ?>">

		<table>
			<tr></tr>
			<tr>
				<td>Country Name:</td>
				<td><input type="text" name="country" value="<?= $_country["name"] ?? "" ?>">
					<br>
				</td>
			</tr>
			<tr>
				<td>Status:</td>
				<td>

					<select name="status">
						<option value="1" <?= ($_country["status"] == "1") ? "selected" : "" ?>>Enable</option>
						<option value="2" <?= ($_country["status"] == "2") ? "selected" : "" ?>>Disable</option>
					</select>
				</td>
b
			</tr>
			<tr>
				<td>States:</td>
				<td>
					<table id="table_data">
						<tr>
							<th>Name</th>
							<th>Status</th>
							<td><button type="button" id="add_more">+</button></td>

						</tr>
						<?php while ($_stateget = mysqli_fetch_assoc($staterecd)) { ?>
							<tr>
								<td>
									<input type="hidden" name="state_id[]" value="<?= $_stateget["id"] ?>">

									<input type="text" name="state_name[]" value="<?= $_stateget['name'] ?>">
								</td>

								<td><select name="state_status[]">
										<option value="1" <?= ($_stateget['status'] == 1) ? "selected" : "" ?>>Enable</option>
										<option value="2" <?= ($_stateget['status'] == 2) ? "selected" : "" ?>>Disable</option>
									</select></td>
								<td><button type="button" id="remove">X</button></td>
							</tr>
						<?php } ?>
					</table>
				</td>
			</tr>


			<tr>
				<td></td>
				<td><input type="submit" value="update" name="update">

				</td>
			</tr>

		</table>

	</form>

	<script>
		$(document).ready(function () {

			$("#add_more").click(function () {
				let tableRow = '<tr>\
				<td><input type="text" name="state_name[]"></td>\
				<td><select name="state_status[]">\
					<option value="1">Enable</option>\
					<option value="2">Disable</option>\
				</select></td>\
				<td><button type="button" id="remove">X</button></td>\
			</tr>'

				$("#table_data").append(tableRow);


			});
			$("#table_data").delegate("#remove", "click", function () {
				$(this).closest("tr").remove();
			});
		});
	</script>
</body>

</html>