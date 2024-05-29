<?php
session_start();

if (isset($_SESSION['name'])) {
	header('Location:index.php');
}


?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Admin Panel</title>
	<?php
	include('header.php');
	?>

</head>

<body class="sign-in-up">
	<section>
		<div id="page-wrapper" class="sign-in-wrapper">
			<div class="graphs">
				<div class="sign-in-form">
					<div class="sign-in-form-top">
						<p><span>Sign In to</span> <a href="index.php">Admin</a></p>
					</div>
					<div class="signin">
						<form method="post">
							<div class="log-input">
								<div class="log-input-center">
									<input type="text" name="name" class="user" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}" />
								</div>
							</div>
							<div class="log-input">
								<div class="log-input-center">
									<input type="password" name="password" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password:';}" />
								</div>
							</div>
							<input type="submit" name="sbt" value="Login to your account">
						</form>
						<br />

						<?php

						if (isset($_POST['sbt'])) {
							if ($_POST['name'] == "Admin" && $_POST['password'] == "admin_123") {
								$_SESSION['name'] = "Admin";
								header('Location:index.php');
							} else {
								echo "<p class='text-danger'>Invalid Username/Password </p>";
							}
						}
						?>

					</div>
				</div>
			</div>
		</div>
		<!--footer section start-->
		<footer>
			<p>&copy 2022 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
		</footer>
		<!--footer section end-->
	</section>

	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>