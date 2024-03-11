<?php 
require_once("config.php");

$selectQuery = "SELECT * FROM `blocks`";
$dataQuery = $conn->query($selectQuery);



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Admin</title>
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
                        <h1 class="page-head-line">Block List</h1>
                        <!-- <h1 class="page-subhead-line"></h1> -->
                        <?php include_once("message.php"); ?>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover myTable display">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Title</th>
                                            <th>Heading</th>
                                            <th>Ordering</th>
                                            <th>Identifier</th>
                                            <th>Status</th>
                                            <th>Banner Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($dataQuery->num_rows){
                                    $i=1;
                                        while($_data = mysqli_fetch_assoc($dataQuery)) {
                                    ?> 
                                        <tr> 
                                            <td><?= $i++ ?></td>
                                            <td><?= $_data["title"] ?></td>
                                            <td><?= $_data["heading"] ?></td>
                                            <td><?= $_data["ordering"] ?></td>
                                            <td><?= $_data["identifier"] ?></td>
                                            <td><?= ($_data["status"]==1)?"Enable":"Disable" ?></td>
                                            <td style="width:16%;">
                                                <img src="<?= $_data["banner_image"] ?>" alt="" style="width:100%;">
                                            </td>
                                            <td>
                                                <a href="block-edit.php?id=<?= $_data["id"] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                <a href="block-delete.php?id=<?= $_data["id"] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    <?php } } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <?php include_once("includes/footer.php"); ?>
    


<!-- 
    Database name: php_project
Table Name: users
Fields: id, name, email, phone, gender, designation, password, confirm_password(only in form), created_at, updated_at


date get from dashboard
user login
user logout


 -->





</body>
</html>
