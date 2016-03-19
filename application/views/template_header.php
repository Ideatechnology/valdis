<!DOCTYPE html>
<html>
<head>
  <title>PT. RAJA VALASINDO ABADI</title>
  <!-- JQUERY -->
  <script type="text/javascript" src="<?php echo base_url();?>assets_frontend/design/jquery-1.11.3.js"></script>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/design/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets_frontend/design/bootstrap/js/bootstrap.js"></script>
  <!-- Flat -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/design/flat.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/design/font-awesome/css/font-awesome.css">
  <!-- OWL-CAROUSEL -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/design/owl-carousel/owl.carousel.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets_frontend/design/owl-carousel/owl.carousel.js"></script>
  <!-- CAPTION -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/design/caption/css/component.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets_frontend/design/caption/js/modernizr.custom.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets_frontend/design/caption/js/toucheffects.js"></script>
  <!-- PERSONAL -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_frontend/design/style.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets_frontend/design/component.js"></script>
</head>
<body>
<nav class="nav-top">
  <div class="container">
    <ul>
      <li><a href="index.php">home</a></li>
      <li><a href="about_us.php">about money charger</a></li>
      <li><a href="products.php">products</a></li>
      <li><a href="gallery.php">gallery</a></li>
      <li><a href="news_events.php">news & events</a></li>
      <li><a href="contact_us.php" style="border: none;">contact us</a></li>
      <li>
        <i class="fa fa-search" id="searchtoggl" style="cursor:pointer"></i>
          
      </li>
    </ul>
  </div>
</nav>
<div id="searchbar" class="clearfix">
  <form id="searchform" method="get" action="searchpage.php">
     <input type="search" name="s" id="s" placeholder="Keywords..." autocomplete="off">
    
  </form>
</div>

<div class="header">
  <div class="container">
    <ul>
      <li><a href="#">
        <img src="<?php echo base_url();?>assets_frontend/logo.png">
      </a></li>
      <div class="call-logs">
        <li><a href="#">
          call us<br> 
          <i class="fa fa-phone fa-2x"></i><br>
          <div>(021)-1234123</div>
        </a></li>
        <li><a href="#">
          mail us<br> 
          <i class="fa fa-envelope-o fa-2x"></i><br>
          <div>cs@rajavalas.com</div>
        </a></li>
        <li><a href="#">
          whatsapp<br>  
          <i class="fa fa-whatsapp fa-2x"></i><br>
          <div>0812-911-141911</div>
        </a></li>
      </div>
    </ul>
  </div>
</div>

<?php
					ini_set('memory_limit', '512M');
					echo $contents;
				?>
