<?php
require_once("config.php");


$selQuery = "SELECT * FROM `countries`";
$countryData = $con->query($selQuery);


$id = $_GET['id'] ?? 0;

$setQuery = "SELECT * FROM `states` WHERE id=$id";
$staterecd = $con->query($setQuery);

$_state = mysqli_fetch_assoc($staterecd);

$cityQuery = "SELECT * FROM `cities` WHERE state_id=$id";
$cityrecd = $con->query($cityQuery);

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
	<form action="state-update.php" method="post">
		<input type="hidden" name="id" value="<?= $_state['id'] ?>">
		<table>
			<tr></tr>
			<tr>
				<td>Country:</td>
				<td><select name="country_id">
						<?php while ($_country = mysqli_fetch_assoc($countryData)) { ?>
							<option value="<?= $_country['id'] ?>" <?= ($_country['id']==$_state['country_id'])?"selected":"" ?>>
								<?= $_country['name'] ?>
							</option>
							<?php
						}
						?>

					</select><br></td>

			</tr>
			<tr>
				<td>State:</td>
				<td><input type="name" name="name" value="<?php echo $_state["name"] ?? "" ?>"><br></td>
			</tr>
			<tr>
				<td>Status:</td>
				<td>
					<select name="status">
						<option value="1" <?= ($_state["status"] == "1") ? "selected" : "" ?> >Enable</option>
						<option value="2" <?= ($_state["status"] == "2") ? "selected" : "" ?> >Disable</option>
					</select>
				</td>

			</tr>
			<tr>
				<td>cities:</td>
				<td>
					<table id="table_data">
						<tr>
							<th>Name</th>
							<th>Status</th>
							<td><button type="button" id="add_more">+</button></td>

						</tr>
						<?php while ($_city = mysqli_fetch_assoc($cityrecd)) { ?>
							<tr>
								<td>
									<input type="hidden" name="city_id[]" value="<?= $_city["id"] ?>">
									<input type="text" name="city_name[]" value="<?= $_city['name'] ?>">
								</td>

								<td><select name="city_status[]">
										<option value="1" <?= ($_city['status'] == 1) ? "selected" : "" ?>>Enable</option>
										<option value="2" <?= ($_city['status'] == 2) ? "selected" : "" ?>>Disable</option>
									</select></td>
								<td><button type="button" id="remove">X</button></td>
							</tr>
						<?php } ?>
					</table>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
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