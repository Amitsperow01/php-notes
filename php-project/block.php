<?php
include_once("admin/config.php");

$id = $_GET['id'];

$blockSelQuery = "SELECT * FROM `blocks` WHERE id=$id";
$blockRec = $conn->query($blockSelQuery);
$_print_data = mysqli_fetch_assoc($blockRec);
$_title = $_print_data['title'];
$_img = $_print_data["banner_image"];
$_description = $_print_data["description"];

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


  <?php include_once("includes/header.php"); ?>

</head>

<body>

  <div class="main_body_content">

    <div class="hero_area">

      <?php include_once("includes/nav-top.php"); ?>

      <!-- end header section -->
    

    <!-- about section -->

    <section class="about_section layout_padding ">
      <div class="container  ">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                 <?=$_title ?>
                </h2>
              </div>
              <p>
			  <?=$_description?>
                <!-- Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web pagend web page editors now use Lorem Ipsum as their default model text, </p> -->
              <!-- <a href="#">
                <span>
                  Read More
                </span> -->
                <!-- <img src="images/color-arrow.png" alt="">
              </a> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="admin/<?=$_img?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- chocolate section -->
<!-- 
    <section class="chocolate_section ">
      <div class="container">
        <div class="heading_container">
          <h2>
            Our chocolate products
          </h2>
          <p>
            Many desktop publishing packages and web pagend web page editors now use Lorem Ipsum as their
          </p>
        </div>
      </div>
      <div class="container">
        <div class="chocolate_container">
          <div class="box">
            <div class="img-box">
              <img src="images/chocolate1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chocolate</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chocolate2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chocolate</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chocolate3.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chocolate</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chocolate1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chocolate</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chocolate2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chocolate</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="images/chocolate3.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Yummy <span>chocolate</span>
              </h6>
              <h5>
                $5.0
              </h5>
              <a href="">
                BUY NOW
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- end chocolate section -->

    <!-- offer section -->

    <!-- <section class="offer_section layout_padding">
      <div class="container">
        <div class="box">
          <div class="detail-box">
            <h2>
              Offers on chocolates
            </h2>
            <h3>
              Get 5% Offer <br>
              any Chocolate items
            </h3>
            <a href="">
              Buy Now
            </a>
          </div>
          <div class="img-box">
            <img src="images/offer-img.png" alt="">
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            <span>
              See More
            </span>
            <img src="images/color-arrow.png" alt="">
          </a>
        </div>
      </div>
    </section> -->

    <!-- end offer section -->

    <!-- client section -->

    

    <!-- end client section -->


    <!-- contact section -->
    <?php include_once("contact.php"); ?>


    <!-- info section -->

    <?php include_once("includes/footer.php"); ?>


</body>

</html>