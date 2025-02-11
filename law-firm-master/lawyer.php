<?php
include("dbconn.php");

@$id = $_GET['id'];
if ($id == null) {
	$querylawyer = "select lid,c_name,l_name,l_detail,l_pic FROM lawyers JOIN category ON category.cid=lawyers.cid";
	$rawlawyer = mysqli_query($conn, $querylawyer);
} else {
	$querylawyer = "select lid,c_name,l_name,l_detail,l_pic FROM lawyers JOIN category ON category.cid=lawyers.cid  where lawyers.cid = $id ";
	$rawlawyer = mysqli_query($conn, $querylawyer);
}


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

	
	<?php include('navbar.php');
	?>
	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate mb-5 text-center">
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span><span> <a href="lawyer.php">Lawyer <i class="fa fa-chevron-right"></i></a></span></p>
					<h1 class="mb-0 bread">Our Qualified Lawyer</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row">

				<?php

				while ($rowlawyer = mysqli_fetch_array($rawlawyer)) {
				?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(<?= $rowlawyer['l_pic'] ?>);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3><?= $rowlawyer['l_name'] ?></h3>
								<p class="pt-1"><a href="Lawyer-detail.php?id=<?= $rowlawyer[0] ?>" class="btn-custom">Details <span class="icon-long-arrow-right"></span></a></p>
								<span class="position mb-2"><?= $rowlawyer['c_name'] ?></span>
								<div class="faded">
									<p><?= $rowlawyer['l_detail'] ?></p>
								</div>
							</div>
						</div>
					</div>

				<?php
				}
				?>

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