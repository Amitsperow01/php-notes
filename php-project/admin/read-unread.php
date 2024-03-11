<?php
require_once("config.php");

$ids = $_POST['i_ds'];

$updateQuery = "UPDATE enquiries SET status=2 WHERE id=$ids";
$conn->query($updateQuery);


?>
<button class="btn btn-success">Read</button>
