<?php
require_once("config.php");
$selQuery = "SELECT * FROM `countries`";
$countryData = $con->query($selQuery);
$selQueryy = "SELECT * FROM `states`";
$StateData = $con->query($selQueryy);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title> Add City</title>
</head>

<body>
	<form action="city-save.php" method="post">
		<table>
			<tr></tr>
			<tr>
				<td>Country:</td>
				<td><select name="country_id" id="country_id">
						<option value="">Select Country</option>
						<?php while ($_country = mysqli_fetch_assoc($countryData)) { ?>
							<option value="<?= $_country['id'] ?>">
								<?= $_country['name'] ?>
							</option>
							<?php
						} ?>
					</select><br></td>
			<tr>

				<td>State:</td>
				<td><select name="state_id" id="state_id">
						<option value="">Select State</option>
						<?php /* while ($_state = mysqli_fetch_assoc($StateData)) { ?>
							<option value="<?= $_state['id'] ?>">
								<?= $_state['name'] ?>
							</option>
							<?php
						} */ ?>
					</select><br></td>
			</tr>
			<tr>
				<td>City:</td>
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
				<td></td>
				<td><button name="submit">Save</button></td>
			</tr>

		</table>

	</form>

	<script>
		$(document).ready(function(){
			$("#country_id").change(function(){

				let ctryid=$(this).val();

				$.ajax({ 
					url:'get_state.php',
					method:'GET',
					data:{'cnt_id':ctryid},
					success:function(responce){
						$('#state_id').html(responce);
					},
					error:function(err){
						console.log(err);
					}
				});
			});

		});
	</script>
</body>

</html>