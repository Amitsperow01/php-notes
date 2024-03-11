<?php
require_once("config.php");

$id=$_GET['id']??0;

if($id){
	$setQuery="SELECT * FROM `first_table` WHERE id=$id";
	$studrecd=$con->query($setQuery);
	if(!$studrecd->num_rows){
		$_SESSION["error"] = "Something Wrong With ID..";
		header("location:student-list.php");
		exit();
}
$_student=mysqli_fetch_assoc($studrecd);
}else{
	$_SESSION["error"] = "Something Wrong ..";
	header("location:student-list.php");
	exit();
}



?>
<!DOCTYPe html>
<html>

<head>

	<title>Update Student Record</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width,initial-scale=1.0">

	<style>
		/* form {
			background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
			border: 2px dashed black;
			 # text-align: right; 
		}*/
		
		.error {
			color: red;
		}
	</style>

</head>

<body>
	<h2>Udate Record</h2>
	<?php require_once("message.php");?>
	<form action="student-update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $_student["id"] ?>">
		<table cellpadding="10">
			<br>
			<tr>
				<td>Name: <span style="color:red;">*</span></td>
				<td><input type="name" name="name" maxlength="50"
						value="<?php echo $_student["name"] ?? "" ?>">(Max 50 Characters Allowed)
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
				<td>Email ID <span style="color:red;">*</span></td>
				<td><input type="email" name="email" value="<?= $_student["email"] ?? "" ?>">
					<?php if (isset($_SESSION["email_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["email_error"];
							unset($_SESSION["email_error"]);
							?>
						</span>
					<?php } ?>

				</td>
			</tr>
			<tr>
				<td>Gender<span style="color:red;">*</span></td>
				<td><input type="radio" name="gender" value="Male" <?= (($_student["gender"] ?? NULL) == "m") ? "checked" : "" ?> />Male &nbsp;&nbsp;&nbsp;
					<input type="radio" name="gender" value="Female" <?= (($_student["gender"] ?? NULL) == "f") ? "checked" : "" ?> />Female
					<?php if (isset($_SESSION["gender_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["gender_error"];
							unset($_SESSION["gender_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Phone <span style="color:red;">*</span></td>
				<td><input type="tel" name="phone" value="<?= $_student["phone"] ?? "" ?>"
						maxlength="10">(Max 10 Digits Allowed)
					<?php if (isset($_SESSION["phone_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["phone_error"];
							unset($_SESSION["phone_error"]);
							?>
						</span>
					<?php } ?>

				</td>
			</tr>
			<tr>
				<td>Address<span style="color:red;">*</span></td>
				<td><textarea name="address" rows="5" cols="20"><?= $_student["address"] ?? "" ?></textarea>
					<?php if (isset($_SESSION["address_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["address_error"];
							unset($_SESSION["address_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
				<button type="submit">update</button>
				</td>
			</tr>

		</table>
	</form>
	

</body>

</html>