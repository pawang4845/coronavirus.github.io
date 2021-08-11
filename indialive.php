 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid19 Website</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">pawang4845@gmail.com</a>
        <i class="icofont-phone"></i> 9826634412
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Covid-19<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="indialive.php">India Live Corona</a></li>
          <li><a href="#Smypthms">Smypthms</a></li>
          <li><a href="#Prevention">Prevention</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<br>
<br>
<br>
<br>
<br>
<br>
	<div class="table-responsive">
		
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th style="background-color: skyblue;">Lastupdated Time</th>
				<th style="background-color: skyblue;">State</th>
				<th style="background-color: skyblue;">Confirmed</th>
				<th style="background-color: skyblue;">Active</th>
				<th style="background-color: skyblue;">Recovered</th>
				<th style="background-color: skyblue;">Deaths</th>
				
			</tr>

             <?php 

             $data = file_get_contents('https://api.covid19india.org/data.json');
             $coronalive = json_decode($data, true);

             // echo "<pre>";
              
             //  print_r($coronalive);

             // echo "</pre>";
             $statecount = count($coronalive['statewise']) ;

  // echo $coronalive['statewise'][1]['state'] ;

            $i = 1;
            while ($i < $statecount) {

            	?>

            	<tr>
            		<td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>

            		<td> <?php echo $coronalive['statewise'][$i]['state'] ?> </td>

            		<td> <?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>

            		<td> <?php echo $coronalive['statewise'][$i]['active'] ?> </td>

            		<td> <?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>

            		<td> <?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>
            	</tr>
            	

            	<?php

            	$i++;
            }

              ?>





		</table>
	</div>
</body>
</html>








