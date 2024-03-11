<?php include_once("admin/config.php");

$Selpag = "SELECT * FROM `pages` WHERE status=1 ORDER BY ordering ASC";
$dataPag = $conn->query($Selpag);

?>
<!-- header section strats -->
<header class="header_section">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        ChocoLux
      </a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <?Php while ($_page = mysqli_fetch_assoc($dataPag)) {  ?>
            <li class="nav-item">
              <a href="page.php?id=<?=$_page['id']?>" class="nav-link"><?= $_page['title'] ?> </a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <div class="quote_btn-container">
          <form class="form-inline">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
          <a href="">
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>
<!-- end header section -->