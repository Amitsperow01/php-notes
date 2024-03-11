<?php
require_once("config.php");

// if((isset($_SESSION["name"]) && isset($_SESSION["email"]))) {
//     header("location:dashboard.php");
// } 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body">
                    <?php include_once("message.php"); ?>
                    <form action="forget-password-page.php" method="POST">
                        <hr />
                        <h5>Enter Details to Forget password</h5>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" />
                        </div>
                        <button class="btn btn-primary">Send Link to email</button>
                        <hr />
                    </form>
                </div>

            </div>


        </div>
    </div>

</body>

</html>