<?php

require_once("config.php");

$src_data = $_GET["searchdata"];

if ($src_data) {
    $rowCounQuery = "SELECT count(*) as total_row FROM `school`  WHERE name LIKE '%$src_data%'";
} else {
    $rowCounQuery = "SELECT count(*) as total_row FROM `school` ";
}

$rowCountData = $conn->query($rowCounQuery);
$totalRow = mysqli_fetch_assoc($rowCountData);
$totalRow = $totalRow['total_row'];
//------End--------

$pagesize = 5;
$totalpage = ceil($totalRow / $pagesize);
//--------END---------

$page = $_GET["page"] ?? 1;

$start = $page * $pagesize - $pagesize;

if ($src_data) {
    $selectQuery = "SELECT * FROM `school` WHERE name LIKE '%$src_data%' LIMIT  $start,$pagesize";
} else {
    $selectQuery = "SELECT * FROM `school` LIMIT  $start,$pagesize";
}
// $src_data = $data["searchdata"];


$selectData = $conn->query($selectQuery);

?>
<!-- <table border="1" cellspacing="0"> -->
<table border="1" cellspacing="0">
    <tr>
        <th>Sr.No.</th>
        <th>Hr.No.</th>
        <th>Name</th>
        <th>Marks</th>
        <th>Grade</th>
        <th>City</th>
        <th>Action</th>
    </tr>
    <?php if ($selectData->num_rows) { ?>

        <?php
        $i = $start + 1;
        while ($_selectData = mysqli_fetch_assoc($selectData)) { ?>
            <tr>
                <td>
                    <?= $i++ ?>
                </td>
                <td>
                    <?= $_selectData["id"] ?>
                </td>
                <td>
                    <?= $_selectData["name"] ?>
                </td>
                <td>
                    <?= $_selectData["marks"] ?>
                </td>
                <td>
                    <?= $_selectData["grade"] ?>
                </td>
                <td>
                    <?= $_selectData["city"] ?>
                </td>
                <td>
                    <button id="editBtn" data-edit-id="<?= $_selectData["id"] ?>">Edit</button> |
                    <button id="deleteBtn" data-id="<?= $_selectData["id"] ?>">Delete</button>
                </td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="5" align="center">Data No Found...</td>
        </tr>
    <?php } ?>
    <!-- </table> -->
</table>

<div class="pagination">
    <?php if ($page > 1) { ?>

        <a href="javascript:void(0)" class="pages" page-no="<?= ($page - 1) ?>">Previous&laquo;</a>
        <?php
    } ?>
    <?php
    for ($i = 1; $i <= $totalpage; $i++) { ?>
        <a href="javascript:void(0)" class="pages" page-no="<?= $i ?>">
            <?= $i ?>
        </a>
    <?php }

    if ($totalpage > $page) {
        ?>
        <a href="javascript:void(0)" class="pages" page-no="<?= $page + 1 ?>">Next&raquo;</a>
        <?php
    } ?>
</div>