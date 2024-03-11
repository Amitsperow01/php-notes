<?php
require_once("config.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Add</title>
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
                        <h1 class="page-head-line">Add User</h1>
                        <span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> User Add</strong></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-body">

                                <?php include_once("message.php"); ?>
                                <form role="form" action="user-save.php" method="POST">
                                    <div class="form-group">
                                        <label>Enter Name</label>
                                        <input class="form-control" type="text" name="name" value="<?= $_SESSION["fName"] ?? '' ?>">
                                        <p class="help-block" style="color:red;">
                                            <?php 
                                                if(isset($_SESSION["name_error"])) {
                                                    echo $_SESSION["name_error"];
                                                    unset($_SESSION["name_error"]);
                                                }
                                            ?>
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" type="email" name="email" value="<?= $_SESSION["fEmail"] ?? '' ?>">
                                        <p class="help-block" style="color:red;"> 
                                            <?php 
                                            if(isset($_SESSION["email_error"])) { 
                                                echo $_SESSION["email_error"];
                                                unset($_SESSION["email_error"]);
                                            } 
                                            ?>
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                                        <input class="form-control" type="tel" name="phone_number" value="<?= $_SESSION["phoneNumber"] ?? '' ?>">
                                        <p class="help-block" style="color:red;"> 
                                            <?php 
                                                if(isset($_SESSION["phone_number_error"])) {
                                                    echo $_SESSION["phone_number_error"];
                                                    unset($_SESSION["phone_number_error"]);
                                                }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Gender</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" id="gender1" value="m" <?= (($_SESSION["genders"] ?? NULL) == 'm') ? 'checked' : '' ?>>Male
                                            </label>
                                        </div>
                                        <p class="help-block" style="color:red;"> 
                                            <?php 
                                                if(isset($_SESSION["gender_error"])) {
                                                    echo $_SESSION["gender_error"];
                                                    unset($_SESSION["gender_error"]);
                                                }
                                            ?>
                                        </p>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" id="gender2" value="f" <?= (($_SESSION["genders"] ?? NULL) == 'f') ? 'checked' : '' ?>>FeMale
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Designation</label>
                                        <input class="form-control" type="text" name="designation" value="<?= $_SESSION["designations"] ?? '' ?>">
                                        <p class="help-block" style="color:red;"> 
                                            <?php 
                                                if(isset($_SESSION["designation_error"])) {
                                                    echo $_SESSION["designation_error"];
                                                    unset($_SESSION["designation_error"]);
                                                }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input class="form-control" type="password" name="password">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="confirm_password">
                                        <p class="help-block" style="color:red;"> 
                                            <?php 
                                            if(isset($_SESSION["password_error"])) { 
                                                echo $_SESSION["password_error"];
                                                unset($_SESSION["password_error"]);
                                            } ?>
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-info">Save </button>

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


    <?php
    unset($_SESSION["fName"]);
    unset($_SESSION["fEmail"]);
    unset($_SESSION["phoneNumber"]);
    unset($_SESSION["genders"]);
    unset($_SESSION["designations"]);
    include_once("includes/footer.php");
    ?>



</body>

</html>