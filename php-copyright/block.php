<?php 

require_once("admin/config.php");

$id = $_GET['id'];


$blockSelQuery = "SELECT * FROM `blocks` WHERE id=$id";
$blockRec = $conn->query($blockSelQuery);
$_print_data = mysqli_fetch_assoc($blockRec);
$_title = $_print_data['title'];
$_img = $_print_data["banner_image"];
$_description = $_print_data["description"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include_once("includes/header.php"); ?>
</head>

<body>
<?php include_once("includes/nav-top.php"); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background:url(admin/<?= $_img ?>) top center no-repeat;background-size:cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $_title ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?= $_title ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
              <?= $_description ?>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <?php include_once("includes/footer.php"); ?>

</body>

</html>