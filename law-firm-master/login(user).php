<?php

include('dbconn.php');
session_start();


if (isset($_SESSION['cname'])) {
  header('Location:index.php');
}
// $querylaw="select lawyer.lid,category.c_name,category.cid from lawyers inner join category on lawyers.cid=category.cid";
// $rawlaw=mysqli_query($conn,$querylaw);
$querycat = "select cid,c_name from category";
$rawcat = mysqli_query($conn, $querycat);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div> -->

  <?php include('navbar.php');
  ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
          <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span><span><a href="login(user).php">Login <i class="fa fa-chevron-right"></i></a></span></p>
          <h1 class="mb-0 bread">Our Respected User</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex mb-5 contact-info text-center">
        <div class="col-md-12 mb-6">
          <h2 class="h3">Login Here</h2>
        </div>
      </div>

      <div class="row block-9">

        <div class="col-md-4"></div>

        <div class="col-md-6 order-md-last d-flex">
          <form action="#" method="post" class="bg-white p-5 contact-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" required placeholder="Your Name / Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name / Email';}">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" required placeholder="Your Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Password';}">
            </div>
            <div class="form-group text-center">
              <input type="submit" name="sbt" value="Login" class="btn btn-primary py-2 px-4">
            </div>
            <br />
            Not a Registered User? <a href="register(user).php">Click Here</a>

            <br />
            <br />
            <?php
            if (isset($_POST['sbt'])) {
              $name = $_POST['name'];
              $pass = $_POST['password'];

              $query = "select * from customer where (Cname='" . $name . "' or Cmail='" . $name . "') and Cpassword='" . $pass . "'";

              $rawResult = mysqli_query($conn, $query);
              $rowData = mysqli_fetch_array($rawResult);

              if (mysqli_num_rows($rawResult) > 0) {
                $_SESSION['cid'] = $rowData[0];
                $_SESSION['cname'] = $rowData[1];
                $_SESSION['cpic'] = $rowData[6];
                header('Location:index.php');
              } else {
                echo "<p class='text-danger'>Invalid Username/Password </p>";
              }
            }
            ?>
          </form>
        </div>



      </div>
    </div>
  </section>


  <?php include('footer.php');
  ?>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>