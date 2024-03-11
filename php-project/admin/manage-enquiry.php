<?php
require_once("config.php");

$selectQuery = "SELECT * FROM `enquiries`";
$dataQuery = $conn->query($selectQuery);



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                        <h1 class="page-head-line">Manage Enquiry</h1>
                        <!-- <h1 class="page-subhead-line"></h1> -->
                        <?php include_once("message.php"); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($dataQuery->num_rows) {
                                                $i = 1;
                                                while ($_data = mysqli_fetch_assoc($dataQuery)) {
                                            ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $_data["name"] ?></td>
                                                        <td><?= $_data["email"] ?></td>
                                                        <td><?= $_data["phone"] ?></td>
                                                        <td><?= $_data["message"] ?></td>
                                                        <td id="status_id<?= $_data['id'] ?>">
                                                            <?php if($_data['status']==1){ ?>
                                                            <button data-id="<?= $_data['id'] ?>" class="btn btn-danger stats-class">Unread</button>
                                                            <?php } else { ?>
                                                                <button class="btn btn-success">Read</button>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr>
                                                    <td colspan="6" align="center">Data Not Found....</td>
                                                </tr>
                                            <?php } ?>
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

    <script>
        $(document).ready(function() {
            $(".stats-class").click(function() {
                ids = $(this).attr('data-id');
                // alert(ids);
                $.ajax({
                    url: 'read-unread.php',
                    type: 'POST',
                    data: {i_ds:ids},
                    success:function(result){
                        $("#status_id"+ids).html(result);
                    },
                    erro:function(er){
                        alert(er);
                    }
                });
            });
        });
    </script>

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