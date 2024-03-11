<?php

require_once("config.php");
// to get total rows count:
$rowCounQuery = "SELECT count(*) as total_row FROM `first_table` ";
$rowCountData = $con->query($rowCounQuery);
$totalRow = mysqli_fetch_assoc($rowCountData);
$totalRow = $totalRow['total_row'];
//------End--------

$pagesize = 5;
$totalpage = ceil($totalRow / $pagesize);
//--------END---------

$page = $_GET["page"] ?? 1;

$start = $page * $pagesize - $pagesize;
$selQuery = "SELECT * FROM `first_table` LIMIT  $start,$pagesize";
$studentQuery = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student List</title>
</head>

<body>
	<h2>Students list</h2>
	<a href="student-add.php">Add Student</a>


	<table border="1" cellspacing="0">

		<tr>
			<th>Sr.No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Address</th>
			<th></th>
		</tr>

		<?php

		if ($studentQuery->num_rows) {
			$i = $start + 1;
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
					<td><a href="student-edit.php?id=<?= $_student['id'] ?>">Edit</a>|
						<a href="student-delete.php?id=<?= $_student['id'] ?>">Delete</a>
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

	<div class="pagination">
		<a href="?page=<?= ($page == 1) ? 1 : ($page - 1) ?>">Previous&laquo;</a>
		<?php
		for ($i = 1; $i <= $totalpage; $i++) {
			?>
			<a href="?page=<?= $i ?>" class="<?= ($page == $i) ? 'active' : '' ?>">
				<?= $i ?>
			</a>
			<?php
		}
		?>
		<a href="?page=<?= ($page == $i) ? $i: $page + 1 ?>">Next&raquo;</a>
	</div>

</body>

</html>
<style>
	.pagination {
		display: inline-block;
	}

	.pagination a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
	}

	.pagination a.active {
		background-color: #4CAF50;
		color: white;
	}

	.pagination a:hover:not(.active) {
		background-color: #ddd;
	}
</style>