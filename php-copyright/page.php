<?php 
require_once("admin/config.php");

$id = $_GET["id"];

// echo $page_id;


$selectQuery = "SELECT * FROM `pages` WHERE id=$id";
$pageRec = $conn->query($selectQuery);

$_page_data = mysqli_fetch_assoc($pageRec);

$_title = $_page_data['title'];
$_img = $_page_data['banner_image'];
$_heading = $_page_data['heading'];
$_description = $_page_data["description"];
// echo $_img;


// die();

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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4"><?= $_heading ?></h1>

                    <?= $_description ?>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <?php include_once("includes/footer.php"); ?>
</body>

</html>