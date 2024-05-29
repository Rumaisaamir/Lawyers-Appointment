<?php
include("dbconn.php");
$querycatindex = "select * from category";
$rawcatindex = mysqli_query($conn, $querycatindex);

$queryrew = "select Cname,Cpic,r_msg FROM reviews JOIN customer ON customer.cs_id=reviews.cs_id";
$rawrew = mysqli_query($conn, $queryrew);
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

	<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center">
				<div class="col-md-6 ftco-animate d-flex align-items-end">
					<div class="text w-100">
						<h1 class="mb-4">Don't Feel Helpless We Fight for Justice</h1>
						<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<p><a href="contact.php" class="btn btn-primary py-3 px-4">Contact us</a> <a href="#sec" class="btn btn-white py-3 px-4">Read more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-intro" id="sec">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex">
					<div class="intro aside-stretch d-lg-flex w-100">
						<div class="icon">
							<span class="flaticon-lawyer"></span>
						</div>
						<div class="text">
							<h2>Expert Attorneys</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="intro color-1 d-lg-flex w-100">
						<div class="icon">
							<span class="flaticon-auction"></span>
						</div>
						<div class="text">
							<h2>Case Dismissed</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="intro color-2 d-lg-flex w-100">
						<div class="icon">
							<span class="flaticon-court"></span>
						</div>
						<div class="text">
							<h2>Court Performance</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="intro color-3 d-lg-flex w-100">
						<div class="icon">
							<span class="flaticon-court"></span>
						</div>
						<div class="text">
							<h2>Court Performance</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 d-flex align-items-stretch">
					<div class="img img-3 w-100 d-flex justify-content-center align-items-center" style="background-image: url(images/about-1.jpg); position: relative;">
						<a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center justify-content-center">
							<span class="fa fa-play"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 wrap-about ftco-animate">
					<div class="bg-light px-3 px-md-5 py-5 ">
						<div class="heading-section">
							<span class="subheading">Welcome to Law Firm</span>
							<h2 class="mb-3">Why to Put Trust Your Trust In Law Firm</h2>

							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="services d-flex w-100">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="flaticon-lawyer"></span>
									</div>
									<div class="text pl-2">
										<h2>Expert Attorneys</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services d-flex w-100">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="flaticon-<?= 'discount'; ?>"></span>
									</div>
									<div class="text pl-2">
										<h2>Great Discount</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services d-flex w-100">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="flaticon-auction"></span>
									</div>
									<div class="text pl-2">
										<h2>Legal Advisory</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services d-flex w-100">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="flaticon-handcuffs"></span>
									</div>
									<div class="text pl-2">
										<h2>Quick Charges</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter ftco-section ftco-no-pt mt-4 ftco-no-pb img" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
					<div class="block-18 py-4 w-100">
						<span class="icon flaticon-checklist"></span>
						<div class="text align-items-center">
							<strong class="number" data-number="3000">0</strong>
							<span>Trusted Clients</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
					<div class="block-18 py-4 w-100">
						<span class="icon flaticon-checklist"></span>
						<div class="text align-items-center">
							<strong class="number" data-number="1000">0</strong>
							<span>Honor's &amp; Awards</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
					<div class="block-18 py-4 w-100">
						<span class="icon flaticon-checklist"></span>
						<div class="text align-items-center">
							<strong class="number" data-number="2000">0</strong>
							<span>Expert Lawyers</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch counter-wrap ftco-animate">
					<div class="block-18 py-4 w-100">
						<span class="icon flaticon-checklist"></span>
						<div class="text align-items-center">
							<strong class="number" data-number="10540">0</strong>
							<span>Successful Cases</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Practice Area</span>
					<h2>What We Cover</h2>
				</div>
			</div>
			<div class="row">



				<?php

				while ($rowcatindex = mysqli_fetch_array($rawcatindex)) {
				?>
					<div class="col-md-4 d-flex align-items-stretch ftco-animate">
						<div class="services-2 text-center">
							<div class="icon-wrap">
								<div class="mini-icon d-flex align-items-center justify-content-center"><span class="flaticon-<?= $rowcatindex['c_icon'] ?>"></span></div>
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-<?= $rowcatindex['c_icon'] ?>"></span>
								</div>
							</div>
							<h2><?= $rowcatindex['c_name'] ?></h2>
							<p><?= $rowcatindex['c_details'] ?></p>

						</div>
					</div>

				<?php
				}
				?>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="img img-bg" style="background-image: url(images/bg_4.jpg);"></div>
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-3">Happy Clients</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<?php

						while ($rowrew = mysqli_fetch_array($rawrew)) {
						?>
							<div class="item">
								<div class="testimony-wrap py-4">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
									<div class="text">
										<p class="mb-4"><?= $rowrew['r_msg']  ?></p>
										<div class="d-flex align-items-center">
											<div class="user-img" style="background-image: url(<?= $rowrew['Cpic'] ?>)"></div>
											<div class="pl-3">
												<p class="name"><?= $rowrew['Cname'] ?></p>
												<span class="position">Our Happy Customer</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 pr-md-5">
					<div class="heading-section heading-section-white">
						<h2 class="mb-3">We Have Great Results</h2>

						<div class="row mt-md-4">
							<div class="col-lg-6">
								<div class="services d-flex w-100">
									<div class="icon icon-2 d-flex align-items-center justify-content-center">
										<span class="flaticon-medal"></span>
									</div>
									<div class="text pl-3">
										<h2>Award Winning</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services d-flex w-100">
									<div class="icon icon-2 d-flex align-items-center justify-content-center">
										<span class="flaticon-auction"></span>
									</div>
									<div class="text pl-3">
										<h2>60 Years of Experience</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="services d-flex w-100">
									<div class="icon icon-2 d-flex align-items-center justify-content-center">
										<span class="flaticon-lawyer"></span>
									</div>
									<div class="text pl-3">
										<h2>Best Attorneys team</h2>
										<p>A small river named Duden flows by their place and supplies</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 half ftco-animate">
					<h2 class="mb-4">Free Case Consultation</h2>
					<form action="" class="appointment" method="post">
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name">
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
              <input type="email" required class="form-control" name="uemail" placeholder="Your Email">
            </div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="category" id="" class="form-control">
											<option>Select Category</option>
											<?php
												$sql_fetch = "Select * from category";
													$res = $conn->query($sql_fetch);
													while($row = $res->fetch_array())
													{
											?>
											
												<option value="<?php echo $row['cid'] ?>"><?php echo $row['c_name'] ?></option>
												<?php
													}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Send message" name="btn_reg"  class="btn btn-primary py-3 px-4">
								</div>
							</div>
							
							<?php

if (isset($_POST['btn_reg'])) {
  $name = $_POST['name'];
  $uemail = $_POST['uemail'];
  $msg = $_POST['msg'];
  $category = $_POST['category'];
  $querymsg = "insert into consultant values ('','$name','$uemail','$msg','$category')";
  $insert = mysqli_query($conn, $querymsg);
  if ($insert) {
	echo "<p class='text-success'>We look after your problem!!</p>";
  } else {
	echo "<p class='text-danger'>" . mysqli_error($conn) . "</p>";
  }
}
?>
						</div>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

			$("a").on('click', function(event) {

				if (this.hash !== "") {

					event.preventDefault();

					// Store hash
					var hash = this.hash;


					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 200, function() {

						window.location.hash = hash;
					});
				}
			});
		});
	</script>
</body>

</html>