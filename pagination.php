
<?php
// to get total rows count:
// $rowCounQuery = "SELECT count(*) as total_row FROM `users` ";
// $rowCountData = $conn->query($rowCounQuery);
// $totalRow = mysqli_fetch_assoc($rowCountData);
// $totalRow = $totalRow['total_row'];
// //------End--------

// $pagesize = 5;
// $totalpage = ceil($totalRow / $pagesize);
// //--------END---------

// $page = $_GET["page"] ?? 1;

// $start = $page * $pagesize - $pagesize;
// $selQuery = "SELECT * FROM `users`";
// $userQuery = $conn->query($selQuery);
?>


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

