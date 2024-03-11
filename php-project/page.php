<?php
require_once("admin/config.php");
$id = $_GET['id'];

$selpageQu = "SELECT * FROM `pages` WHERE id=$id";
$pageData = $conn->query($selpageQu);
$_page = mysqli_fetch_assoc($pageData);

$_img = $_page['banner_image'];
$_heading = $_page['heading'];
$_description = $_page["description"];    

?>

<!DOCTYPE html>
<html>

<head>
	<!-- Basic -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Site Metas -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>ChocoLux</title>
	<!-- bootstrap core css -->
	<?php include_once("includes/header.php"); ?>

</head>

<body class="sub_page">

	<div class="main_body_content">

		<div class="hero_area">
			<?php include_once("includes/nav-top.php"); ?>

		</div>

		<!-- about section -->

		<section class="about_section layout_padding ">
			<div class="container  ">
				<div class="row">
					<div class="col-md-6">
						<div class="detail-box">
							<div class="heading_container">
								<h2>
									<?= $_heading?>
									<!-- About Our Company -->
								</h2>
							</div>
							<p>
							<?=$_description ?>
								<a href="#">
								<span>
									Read More
								</span>
								<img src="images/color-arrow.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="img-box">
							<img src="admin/<?= $_img ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- end about section -->

	</div>
	<!-- info section -->
	<?php include_once("includes/footer.php"); ?>

</body>

</html>