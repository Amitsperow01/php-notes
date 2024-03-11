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


<body class="sub_page">

  <div class="main_body_content">

    <div class="hero_area">

    <?php include_once("includes/nav-top.php"); ?>

      <!-- end header section -->
    </div>


    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2>
                  Contact Us
                </h2>
              </div>
              <?php include_once("admin/message.php"); ?>
              <form action="enquiry-save.php" method="post">
                <div>
                  <input type="text"  name="name" placeholder="Full Name " />
                </div>
                <div>
                  <input type="email" name="email" placeholder="Email" />
                </div>
                <div>
                  <input type="tel" name="phone" placeholder="Phone number" />
                </div>
                <div>
                  <textarea name="message" cols="30" rows="10"  class="message-box" placeholder="Message"></textarea> 
                </div>
                <div class="d-flex "> 
                  <button type="submit">
                    SEND NOW
                  </button>
                </div>
              </form>
            </div> 
          </div>
          <div class="col-md-6  px-0">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->


    <?php include_once("includes/footer.php"); ?>


</body>

</html>