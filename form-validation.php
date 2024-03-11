<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
	<title>Document</title>

	<style>
		label.error{
			color: red;
		}
	</style>
</head>

<body>


	<form action="add.php" id="validation">
		<table>
			<tr>
				<td>
					<label>Name</label><br>
					<input type="text" name="name" required>
				</td>
			</tr>
			<tr>
				<td>
					<label>Email</label><br>
					<input type="email" name="email" required>
				</td>
			</tr>
			<tr>
				<td>
					<label>Phone</label><br>
					<input type="tel" name="phone" required>
				</td>
			</tr>
			<tr>
				<td>
					<label>Age</label><br>
					<input type="number" name="age" required>
				</td>
			</tr>
			<tr>
				<td>
					<label>Url</label><br>
					<input type="text" name="url">
				</td>
			</tr>
			<tr>
				<td>
					<label>Gender</label><br>
					<input type="number" name="gender">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
	<script>
		$(document).ready(function() {
			$("#validation").validate()
		});
	</script>

	
</body>

</html>
<br><br><br><br><br><br><br><br><br>
<!-- /////////////////////////////////another by rule/////////////////// -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
	<title>Document</title>

	<style>
		label.error{
			color: red;
		}
	</style>
</head>

<body>
<form action="add.php" id="form_validation">
		<table>
			<tr>
				<td>
					<label>Name</label><br>
					<input type="text" name="name" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Email</label><br>
					<input type="text" name="email" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Phone</label><br>
					<input type="number" name="phone">
				</td>
			</tr>
			<tr>
				<td>
					<label>Age</label><br>
					<input type="number" name="age">
				</td>
			</tr>
			<tr>
				<td>
					<label>Url</label><br>
					<input type="text" name="url">
				</td>
			</tr>
			<tr>
				<td>
					<label>Gender</label><br>
					<input type="number" name="gender">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
	<script>
		$(document).ready(function() {
			$("#form_validation").validate({
				rules:{
					'name':'required',
					'email':{
						email:true,
						required:true
					},
					'phone':{
						required:true,
						minlength:10,
						maxlength:12
					},
					'age':'required',
				},
				messages:{
					'name':'Name is required',
					'email':{
						email:'Enter a vlid Email',
						required:'Email is required'
				},
				'phone':{
						required:'Phone is required',
						minlength:'Minmum 10 number',
						maxlength:'Minmum 12 number'
					},
					'age':'Age is required',
				},
			});
		});
	</script>

</body>

</html>