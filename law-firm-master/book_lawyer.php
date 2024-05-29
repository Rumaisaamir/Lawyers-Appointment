<?php

include("dbconn.php");
session_start();
if (!isset($_SESSION['cname'])) {
  header('Location:login(user).php');
}
$id = $_GET['id'];

$querylaw = "select lid,c_name,l_name,l_detail,l_pic FROM lawyers JOIN category ON category.cid=lawyers.cid  where lawyers.lid = $id ";
$rawlaw = mysqli_query($conn, $querylaw);
$rowlaw = mysqli_fetch_array($rawlaw);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Book Lawyer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/formstyle.css">
</head>

<body>

  <?php include('navbar.php');
  ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
          <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span><span> <a href="lawyer.php">Lawyer <i class="fa fa-chevron-right"></i></span></a><span> <a href="Lawyer-detail.php">Lawyer-Detail <i class="fa fa-chevron-right"></i></a></span> <span><a href="book_lawyer.php">Book a Lawyer <i class="fa fa-chevron-right"></i></a></span></p>
          <h1 class="mb-0 bread">Book A Case</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex mb-5 contact-info text-center">
        <div class="col-md-12 mb-6">
          <h2 class="h3">Book Your Case Here</h2>
        </div>
      </div>

      <div class="row block-9">

        <div class="col-md-4"></div>

        <div class="col-md-6 order-md-last d-flex">
          <form method="post" class="bg-white p-5 contact-form fors" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" required class="form-control" name="u_name" value="<?= $_SESSION['cname'] ?>" placeholder="<?= $_SESSION['cname'] ?>">
            </div>
            <div class="form-group">
              <input type="text" required class="form-control" name="l_name" value="<?= $rowlaw['l_name'] ?>" placeholder="<?= $rowlaw['l_name'] ?>">
            </div>
            <div class="form-group">
              <input type="text" required class="form-control" name="c_name" value="<?= $rowlaw['c_name'] ?>" placeholder="<?= $rowlaw['c_name'] ?>">
            </div>
            <div class="form-group">
              <input type="date" id="date_picker" required class="form-control" name="l_date" placeholder="Enter Booking date">
              <script language="javascript">
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();

                today = yyyy + '-' + mm + '-' + dd;
                $('#date_picker').attr('min', today);
              </script>
            </div>
            <div class="form-group">
              <input type="time" required class="form-control" name="l_time" placeholder="Enter Booking Time">
            </div>
            <div class="form-group text-center">
              <input type="submit" value="Book" name="btn_reg" class="btn btn-primary py-2 px-4 ">
            </div>

            <?php

            if (isset($_POST['btn_reg'])) {

              $l_name = $id;
              $u_name = $_SESSION['cid'];
              $l_date = $_POST['l_date'];
              $l_time = $_POST['l_time'];
              $query = "insert into bookings values ('','" . $l_name . "','" . $u_name . "','" . $l_date . "','" . $l_time . "')";
              $insert = mysqli_query($conn, $query);
              if ($insert) {
                echo "<p class='text-success'>Booking successfully Done!!</p>";
              } else {
                echo "<p class='text-danger'>" . mysqli_error($conn) . "</p>";
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