<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Country Add</title>
	<style>
		.error {
			color: solid black;
		}
	</style>
</head>

<body>
	<h2>Add Country</h2>
	<?php require_once("message.php"); ?>
	<form action="country-save.php" method="post">
		<table>
			<tr>
				<td>Country Name:<span style="color:red;">*</span></td>
				<td><input type="text" name="name" value="<?php echo $_SESSION["name"] ?? "" ?>">
					<?php if (isset($_SESSION["name_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["name_error"];
							unset($_SESSION["name_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Status:<span style="color:red;">*</span></td>
				<td>
					<select name="status">
						<option value="1" <?= (($_SESSION["status"] ?? NULL) == "1") ? "slected" : "" ?>>Enable</option>
						<option value="2" <?= (($_SESSION["status"] ?? NULL) == "2") ? "slected" : "" ?>>Disable</option>
						<?php if (isset($_SESSION["status_error"])) { ?>
							<span class="error">
								<?php
								echo $_SESSION["status_error"];
								unset($_SESSION["status_error"]);
								?>
							</span>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>States:<span style="color:red;">*</span></td>
				<td>
					<table id="table_data">
						<tr>
							<th>Name<span style="color:red;">*</span></th>
							<th>Status<span style="color:red;">*</span></th>
							<td><button type="button" id="add_more">+</button></td>

						</tr>
						<tr>
							<td><input type="text" name="state_name[]" value="" <?= (in_array("state_name", ($_SESSION['state_name'] ?? []))) ?? ""; ?>></td>
							<?php if (isset($_SESSION["state_name[]_error"])) { ?>
								<span class="error">
									<?php
									echo $_SESSION["state_name_error"];
									unset($_SESSION["state_name_error"]);
									?>
								</span>
							<?php } ?>
							<td><select name="state_status[]">
									<option value="1" <?= (($_SESSION["state_status[]"] ?? NULL) == "1") ? "slected" : "" ?>>Enable</option>
									<option value="2" <?= (($_SESSION["state_status[]"] ?? NULL) == "2") ? "slected" : "" ?>>Disable</option>
									<?php if (isset($_SESSION["state_status_error"])) { ?>
										<span class="error">
											<?php
											echo $_SESSION["state_status_error"];
											unset($_SESSION["state_status_error"]);
											?>
										</span>
									<?php } ?>
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