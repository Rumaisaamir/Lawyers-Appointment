<?php

include('dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lawyer Website</title>
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
          <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span><span><a href="register(user).php"> Register <i class="fa fa-chevron-right"></i></a></span></p>
          <h1 class="mb-0 bread">User Registration Form</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex mb-5 contact-info text-center">
        <div class="col-md-12 mb-6">
          <h2 class="h3">Register Here</h2>
        </div>
      </div>

      <div class="row block-9">


        <div class="col-md-4"></div>

        <div class="col-md-6 order-md-last d-flex">
          <form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" required class="form-control" name="uname" placeholder="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name:';}">
            </div>
            <div class="form-group">
              <input type="email" required class="form-control" name="uemail" placeholder="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email:';}">
            </div>
            <div class="form-group">
              <input type="password" required class="form-control" name="upass" placeholder="Your Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Password:';}">
            </div>
            <div class="form-group">
              <input type="text" required class="form-control" name="ucontact" placeholder="Your Contact" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Contact:';}">
            </div>
            <div class="form-group">
              <input type="text" required class="form-control" name="ucnic" placeholder="Your CNIC" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your CNIC:';}">
            </div>
            <div class="form-group">
              <input type="file" required name="uprofile" class="form-control">
            </div>
            <div class="form-group text-center">
              <input type="submit" value="Register" name="btn_reg" class="btn btn-primary py-2 px-4">
            </div>
            <br />
            Already a Registered User? <a href="login(user).php">Click Here</a>

            <br />

            <?php

            if (isset($_POST['btn_reg'])) {
              $uname = $_POST['uname'];
              $uemail = $_POST['uemail'];
              $upassword = $_POST['upass'];
              $ucontact = $_POST['ucontact'];
              $ucnic = $_POST['ucnic'];

              $fileName = $_FILES['uprofile']['name'];
              $fileType = $_FILES['uprofile']['type'];
              $fileSize = $_FILES['uprofile']['size'] / (1024 * 1024);   //size in MBs
              $fileError = $_FILES['uprofile']['error'];
              $fileTmpName = $_FILES['uprofile']['tmp_name'];

              $allowedExt = array("jpg", "png", "gif", "bmp");
              $ext = @strtolower(end(explode(".", $fileName)));

              if ($fileError == 0) {
                if (in_array($ext, $allowedExt)) {
                  if ($fileSize <= 10) {
                    $fileNewName = "IMG_" . time() . rand(1111111, 9999999) . "." . $ext;
                    $path = "uploads/" . $fileNewName;

                    $check = move_uploaded_file($fileTmpName, $path);

                    if ($check) {
                      $query = "insert into customer values ('','" . $uname . "','" . $uemail . "','" . $upassword . "','" . $ucontact . "','" . $ucnic . "','" . $path . "')";
                      $insert = mysqli_query($conn, $query);
                      if ($insert) {
                        echo "<p class='text-success'>User registered successfully!!</p>";
                        header('Location:login(user).php');
                      } else {
                        echo "<p class='text-danger'>" . mysqli_error($conn) . "</p>";
                      }
                    } else {
                      echo "<p class='text-danger'> Error while uploading picture</p>";
                    }
                  } else {
                    echo "<p class='text-danger'> File Size exceeds the limit of 10 MB</p>";
                  }
                } else {
                  echo "<p class='text-danger'> File Type does not meet the required criteria</p>";
                }
              } else {
                echo "<p class='text-danger'> Error in file. Cannot upload file.</p>";
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