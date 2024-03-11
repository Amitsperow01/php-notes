<?php
require_once("config.php");

$countryid = ($_GET['cnt_id']) ? $_GET['cnt_id'] : 0;
$selQueryy = "SELECT * FROM `states` WHERE country_id=$countryid";
$StateData = $con->query($selQueryy);

echo '<option value="">Select State</option>';

while ($_state = mysqli_fetch_assoc($StateData)) {
	?>
	<option value="<?= $_state['id'] ?>">
		<?= $_state['name'] ?>
	</option>
<?php } ?>

?>