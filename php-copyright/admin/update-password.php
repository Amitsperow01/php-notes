<?php 
require_once("config.php");

$token = $_GET["token"];

$selectQuery = "SELECT password_token FROM `users` WHERE password_token='$token'";
$tokenRec = $conn->query($selectQuery);

if($tokenRec->num_rows) {
     $_token = mysqli_fetch_assoc($tokenRec);
     $_token_data = $_token["password_token"];
    
} else {
     $_SESSION["error"] = "Email not match!";
    //  header("location:forget-password.php");
     exit();
}


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
                    <form action="update-password-save.php" method="POST">
                        <input type="hidden" name="token" value="<?= $_token_data ?>">
                        <hr />
                        <label>Create new password</label>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="password" class="form-control" name="create_password" placeholder="Create new password" />
                        </div>
                        
                        <label>Confirm your password</label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your password" />
                        </div>


                        <button class="btn btn-primary">Reset password</button>
                        <hr />
                    </form>
                </div>

            </div>


        </div>
    </div>

</body>

</html>
