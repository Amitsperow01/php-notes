<?php
require_once("config.php");

$selectQuer = "SELECT * FROM `users`";
$selectData = $conn->query($selectQuer);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Project</title>
    <?php include_once("includes/head.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php include_once("includes/nav-top.php"); ?>
        <?php include_once("includes/nav-side.php"); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">User List</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> User list</strong></span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                
                                <!-- message -->
                                <?php include_once("message.php"); ?>
                                <div class="table-responsive">
                                   
                                    <table class="table table-striped table-bordered table-hover myTable display">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Gender</th>
                                                <th>Designation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($selectData->num_rows) {
                                                $i = 1;
                                                while ($userData = mysqli_fetch_assoc($selectData)) {
                                            ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $userData["name"] ?></td>
                                                        <td><?= $userData["email"] ?></td>
                                                        <td><?= $userData["phone"] ?></td>
                                                        <td><?= ($userData["gender"] == "m") ? "Male" : "FeMale" ?></td>
                                                        <td><?= $userData["designation"] ?></td>
                                                        <td>
                                                            <a href="user-edit.php?id=<?= $userData["id"] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                            <a href="user-delete.php?id=<?= $userData["id"] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } } ?>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


    <?php include_once("includes/footer.php"); ?>
   

</body>

</html>