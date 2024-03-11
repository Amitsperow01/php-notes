<?php

require_once("config.php");
// include_once("config.php");

$selQuery = "SELECT * FROM `first_table`";
$studentQuery = $con->query($selQuery);

// dd($studentQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Student List </title>
</head>

<body>
	<h2>Student List</h2>
	<?php require_once("message.php"); ?>
	<a href="Student-add.php">Add Student</a>
	<table border="1px" cellspacing="0" >
		<tr>
			<th>Sr.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Geneder</th>
			<th>Phone</th>
			<th>Address</th>
			<th colspan="2"></th>

		</tr>
		<?php
		if ($studentQuery->num_rows) {
			$i = 1;
			while ($_student = mysqli_fetch_assoc($studentQuery)) {

				?>
				<tr>
					<td>
						<?= $i++ ?>
					</td>
					<td>
						<?= $_student['name'] ?>
					</td>
					<td>
						<?= $_student['email'] ?>
					</td>
					<td>
						<?= $_student['gender'] ?>
					</td>
					<td>
						<?= $_student['phone'] ?>
					</td>
					<td>
						<?= $_student['address'] ?>
					</td>
					<td>
						<a href="student-edit.php?id=<?= $_student['id'] ?>">Edit</a>
					</td>
					<td><a href="student-delete.php?id=<?= $_student['id']?>">Delete</a>
					</td>

				</tr>
				<?php
			}
		} else {
			?>
			<tr>
				<td colspan="6" align="center"> No Data Found...</td>
			</tr>
		<?php
		}
		?>
	</table>

</body>

</html>