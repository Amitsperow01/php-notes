<?php
require_once("config.php");

$id = $_GET["id"];

$selectQuery = "SELECT * FROM `sliders` WHERE id=$id";
$conData = $conn->query($selectQuery);
$getData = mysqli_fetch_assoc($conData);


// dd($id);

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
                        <h1 class="page-head-line">Slider Edit</h1>
                        <!-- <h1 class="page-subhead-line"></h1> -->
                        <?php include_once("message.php"); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" action="slider-update.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="slider_id" value="<?= $getData['id'] ?>">
                                    <div class="form-group">
                                        <label>Enter Title</label>
                                        <input class="form-control" type="text" name="name" value="<?= $getData["title"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Ordering</label>
                                        <input class="form-control" type="number" name="ordering" value="<?= $getData["ordering"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1" <?= ($getData["status"]==1)?"selected":"" ?>>Enable</option>
                                            <option value="2" <?= ($getData["status"]==2)?"selected":"" ?>>Disable</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Image Upload</label>
                                        <div class="">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="<?= $getData["image"] ?>" alt="">
                                                </div>
                                                <div>
                                                    <span class="btn btn-file btn-success">
                                                        <span class="fileupload-new">Select image</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file" name="image" value="<?= $getData["image"] ?>">
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info">Update</button>

                                </form>
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