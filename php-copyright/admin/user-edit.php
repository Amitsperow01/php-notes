<?php 
require_once("config.php");

$id = $_GET["id"];

$userQuery = "SELECT * FROM `users` WHERE id=$id";
$dataQuery = $conn->query($userQuery);
$userData = mysqli_fetch_assoc($dataQuery);



?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Edit</title>
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
                        <h1 class="page-head-line">User Edit</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a > >> <a href="user-list.php">User List</a> >> User Edit</strong></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <?php include_once("message.php"); ?>
                                <form role="form" action="user-update.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $userData["id"] ?>">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input class="form-control" type="text" name="name" value="<?= $userData["name"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" type="text" name="email" value="<?= $userData["email"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                                        <input class="form-control" type="tel" name="phone_number" value= <?= $userData["phone"] ?>>
                                    </div>
                                    <div class="form-group">
                                            <label>Select Gender</label>
                                            <div class="radio"> 
                                                <label>
                                                    <input type="radio" name="gender" id="gender1" value="m" <?= (($userData["gender"]??NULL)=="m")?"checked":"" ?>>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="gender2" value="f" <?= (($userData["gender"]??NULL)=="f")?"checked":"" ?>>FeMale
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Designation</label>
                                        <input class="form-control" type="text" name="designation" value="<?= $userData["designation"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input class="form-control" type="password" name="password">
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



</body>

</html>