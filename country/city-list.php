<?php

require_once("config.php");
$rowCounQuery = "SELECT count(*) as total_row FROM `cities` ";
$rowCountData = $con->query($rowCounQuery);
$totalRow = mysqli_fetch_assoc($rowCountData);
$totalRow = $totalRow['total_row'];
//------End--------

$pagesize = 5;
$totalpage = ceil($totalRow / $pagesize);
//--------END---------

$page = $_GET["page"] ?? 1;

$start = $page * $pagesize - $pagesize;

// $selQuery = "SELECT * FROM `cities`";
// $selQuery = "SELECT ct.*, st.name AS state_name  FROM `cities` AS ct INNER JOIN `states` AS st ON ct.state_id=st.id ";

$selQuery = "SELECT ct.*, cn.name AS country_name,st.name as state_name FROM `cities` AS ct INNER JOIN `countries` AS cn ON ct.country_id=cn.id  INNER JOIN `states` AS st ON ct.state_id=st.id LIMIT  $start,$pagesize";

$cityData = $con->query($selQuery);


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add City</title>
</head>

<body>
	<h2>City</h2>
	<a href="city-add.php">Add City</a>
	<table border="1" cellspacing="0">
		<tr>
			<th>Sr.No.</th>
			<th>Country</th>
			<th>State</th>
			<th>city</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		$i = $start + 1;
		while ($_city = mysqli_fetch_assoc($cityData)) {

			?>
			<tr>
				<td>
					<?= $i++ ?>
				</td>
				<td>
					<?= $_city['country_name'] ?>
				</td>
				<td>
					<?= $_city['state_name'] ?>
				</td>
				<td>
					<?= $_city['name'] ?>
				</td>
				<td>
					<?= ($_city['status'] == "1") ? "Enable" : "Disable" ?>
				</td>
				<td>
					<a href="city-edit.php?id=<?= $_city['id'] ?>">Edit</a>
				</td>
				<td><a href="city-delete.php?id=<?= $_city['id'] ?>"
						onclick="return confirm('Are you sure you wantto delete this record ?');">Delete</a>
				</td>
			</tr>

		<?php } ?>

	</table>
	<div class="pagination">
		<?php if ($page > 1) { ?>
			<a href="?page=<?= ($page == 1) ? 1 : ($page - 1) ?>">Previous&laquo;</a>
		<?php } ?>
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
		<?php } ?>
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