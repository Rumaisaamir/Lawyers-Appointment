<?php
session_start();
include('dbconn.php');
if (isset($_SESSION['lname'])) {
	header('Location:index.php');
}
$query = "Select l_name,Lmail,Lpass,l_pic from lawyers";
$raw = mysqli_query($conn, $query);

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Lawyer Panel</title>
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
						<p><span>Sign In to</span> <a href="index.php">Lawyer Panel</a></p>
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
							$name = $_POST['name'];
							$password = $_POST['password'];
							$query = "select * from lawyers where (l_name='" . $name . "' or Lmail='" . $name . "') and Lpass='" . $password . "'";

							$rawResult = mysqli_query($conn, $query);
							$rowData = mysqli_fetch_array($rawResult);


							if (mysqli_num_rows($rawResult) > 0) {
								$_SESSION['id'] = $rowData["lid"];
								$_SESSION['lname'] = $rowData["l_name"];
								$_SESSION['pic'] = $rowData['l_pic'];
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