<?php
include('dbconn.php');
@session_start();
ob_start();
$id = $_SESSION['id'];
$querylaw = "Select * from lawyers where lid = $id";
$rawlaw = mysqli_query($conn, $querylaw);
$rowlaw = mysqli_fetch_array($rawlaw);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Lawyer Panel</title>
	<?php
	include('header.php');
	?>

</head>

<body class="sticky-header left-side-collapsed" onload="initMap()">
	<section>
		<!-- left side start-->
		<?php

		include('nav.php');

		?>
		<!-- left side end-->

		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">

				<!--toggle button start-->
				<a class="toggle-btn menu-collapsed"><i class="fa fa-bars"></i></a>
				<!--toggle button end-->

				<?php
				include('notif.php');
				?>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<img src="<?= $_SESSION['pic'] ?>" height="400px" width="400px" style="border-radius: 50%; padding:30px;">
						</div>
						<div class="col-md-6 box" style="padding: 20px;top:0 !important; margin-left: 220px; margin-top: 100px;">
							<h1 style="color: rgb(203 184 140);font-family: Georgia;font-weight: 300; text-decoration: underline;"><?= $rowlaw['l_name'] ?></h1>
							<p><?= $rowlaw['l_detail'] ?></p>
						</div>
					</div>
				</div>
				<!-- //header-ends -->
				<!--body wrapper end-->
			</div>
		</div>
		<!--footer section start-->
		<footer>
			<p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
		</footer>
		<!--footer section end-->

		<!-- main content end-->
	</section>

	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>