<?php

require_once("config.php");
$rowCounQuery = "SELECT count(*) as total_row FROM `states` ";
$rowCountData = $con->query($rowCounQuery);
$totalRow = mysqli_fetch_assoc($rowCountData);
$totalRow = $totalRow['total_row'];
//------End--------

$pagesize = 5;
$totalpage = ceil($totalRow / $pagesize);
//--------END---------

$page = $_GET["page"] ?? 1;

$start = $page * $pagesize - $pagesize;

// $selQuery = "SELECT * FROM `states`";
$selQuery = "SELECT st.*,cn.name as country_name FROM `states`AS st INNER JOIN `countries` AS cn ON st.country_id=cn.id  LIMIT  $start,$pagesize ";
$stateData = $con->query($selQuery);


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add State</title>
</head>

<body>
	<h2>State</h2>
	<a href="state-add.php">Add State</a>
	<table border="1" cellspacing="0">
		<tr>
			<th>Sr.No.</th>
			<th>Country</th>
			<th>state</th>
			<th>Status</th>
			<th colspan="2">Action</th>

		</tr>
		<?php
		$i = $start + 1;
		while ($_state = mysqli_fetch_assoc($stateData)) {

			?>
			<tr>
				<td>
					<?= $i++ ?>
				</td>
				<td>
					<?= $_state['country_name'] ?>
				</td>
				<td>
					<?= $_state['name'] ?>
				</td>
				<td>
					<?= ($_state['status'] == "1") ? "Enable" : "Disable" ?>
				</td>
				<td>
					<a href="state-edit.php?id=<?= $_state['id'] ?>">Edit</a>
				</td>
				<td><a href="state-delete.php?id=<?= $_state['id'] ?>"
						onclick="return confirm('Are you sure you wantto delete this record ?');">Delete</a>
				</td>
			</tr>
		<?php } ?>

	</table>

	<div class="pagination">
	<?php if ($page>1) { ?>

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