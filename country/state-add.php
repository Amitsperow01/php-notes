<?php
require_once("config.php");
$selQuery = "SELECT * FROM `countries`";
$countryData = $con->query($selQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<title> Add State</title>
</head>

<body>
	<form action="state-save.php" method="post">
		<table>
			<tr></tr>
			<tr>
				<td>Country:</td>
				<td><select name="country_id">
						<option value="">Select Country</option>
						<?php while ($_country = mysqli_fetch_assoc($countryData)) { ?>
							<option value="<?= $_country['id'] ?>"><?= $_country['name'] ?></option>
							<?php } ?>
					</select><br></td>
			</tr>
			<tr>
				<td>State:</td>
				<td><input type="name" name="name"><br></td>
			</tr>
			<tr>
				<td>Status:</td>
				<td>
					<select name="status">
						<option value="1">Enable</option>
						<option value="2">Disable</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Cities:</td>

				<td>
					<table id="table_data">
						<tr>
							<th>Name</th>
							<th>Status</th>
							<td><button type="button" id="add_more">+</button></td>

						</tr>
						<tr>
							<td><input type="text" name="city_name[]"></td>

							<td><select name="city_status[]">
									<option value="1">Enable</option>
									<option value="2">Disable</option>
								</select></td>
						</tr>

					</table>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Save" name="save">
					<input type="submit" name="save_new" value="New & Save">
				</td>
			</tr>


		</table>

	</form>

	<script>
		$(document).ready(function () {

			$("#add_more").click(function () {
				let tableRow = '<tr>\
				<td><input type="text" name="city_name[]"></td>\
				<td><select name="city_status[]">\
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