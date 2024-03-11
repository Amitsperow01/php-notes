<?php 
require_once("config.php");

$selecQuery = "SELECT * FROM `sliders`";
$selectData = $conn->query($selecQuery);
// dd($selectData);


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
                        <h1 class="page-head-line">Slider List</h1>
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
                                            <th>Ordering</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($selectData->num_rows) {
                                            $i = 1; 
                                            while($sliderData = mysqli_fetch_assoc($selectData)) { 
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $sliderData["title"] ?></td>
                                            <td><?= $sliderData["ordering"] ?></td>
                                            <td><?= ($sliderData["status"]==1)?"Enable":"Disable" ?></td>
                                            <td style="width:20%;">
                                                <img src="<?= $sliderData["image"] ?>" alt="" style="width:100%;">
                                            </td>
                                            <td>
                                                <a href="slider-edit.php?id=<?= $sliderData["id"] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                <a href="slider-delete.php?id=<?= $sliderData["id"] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>
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
