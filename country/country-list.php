<?php

require_once("config.php");
$rowCounQuery = "SELECT count(*) as total_row FROM `countries` ";
$rowCountData = $con->query($rowCounQuery);
$totalRow = mysqli_fetch_assoc($rowCountData);
$totalRow = $totalRow['total_row'];
//------End--------

$pagesize = 5;
$totalpage = ceil($totalRow / $pagesize);
//--------END---------

$page = $_GET["page"] ?? 1;

$start = $page * $pagesize - $pagesize;

$selQuery = "SELECT * FROM `countries` LIMIT  $start,$pagesize";
// $selQuery = "SELECT st.*co.name as country_name FROM states as st INNER JOIN  `country-list` AS co on st.country_id=co.id ";

$Contrydata = $con->query($selQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Country</title>
</head>

<body>
	<h2>Country</h2>
	<a href="country-add.php">Add Country</a>
	<table border="1" cellspacing="0">
		<tr>
			<th>Sr.No.</th>
			<th>Country Name</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		$i = $start + 1;
		while ($_country = mysqli_fetch_assoc($Contrydata)) {

			?>
			<tr>
				<td>
					<?= $i++ ?>
				</td>
				<td>
					<?= $_country['name'] ?>
				</td>
				<td>
					<?= ($_country['status'] == "1") ? "Enable" : "Disable" ?>
				</td>
				<td>
					<a href="country-edit.php?id=<?= $_country['id'] ?>">Edit</a>
				</td>
				<td><a href="country-delete.php?id=<?= $_country['id'] ?>"
						onclick="return confirm('Are you sure you wantto delete this record ?');">Delete</a>
				</td>
			</tr>
		<?php } ?>

	</table>
	<div class="pagination">
		<?php if ($page > 1) { ?>
			<a href="?page=<?= ($page == 1) ? 1 : ($page - 1) ?>">Previous&laquo;</a>
			<?php
		}
		?>
		<?php
		for ($i = 1; $i <= $totalpage; $i++) {
			?>
			<a href="?page=<?= $i ?>" class="<?= ($page == $i) ? 'active' : '' ?>">
				<?= $i ?>
			</a>
			<?php
		}
		?>
		<?php if ($totalpage > $page) { ?>
			<a href="?page=<?= $page + 1 ?>">Next&raquo;</a>
			<?php
		}
		?>
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