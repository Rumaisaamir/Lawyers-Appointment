<?php
include("dbconn.php");
$querydrop = "select cid,c_name from category";
$rawdrop = mysqli_query($conn, $querydrop);
@session_start();
ob_start();

?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="images/Lawyers.png" height="50px" width="50px" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>


		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="practice-areas.php" class="nav-link">Practice Areas</a></li>
				<div class="nav-item dropdown">
					<a href="lawyer.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lawyer</a>
					<div class="dropdown-menu m-0">
						<?php

						while ($rowdrop = mysqli_fetch_array($rawdrop)) {
						?>
							<a href="lawyer.php?id=<?= $rowdrop['cid'] ?>" class="dropdown-item"><?= $rowdrop['c_name'] ?></a>
						<?php
						}
						?>
					</div>
				</div>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

				<li class="nav-item"><a href="review.php" class="nav-link">Feedback Form</a></li>
				&nbsp;
				<?php
				if (isset($_SESSION['cname'])) {
				?>

					<li class="nav-item"><a href="logout(user).php" class="nav-link">Logout</a></li>
					<li class="nav-item" style="color: white; top: 340px !important;"><img src="<?= $_SESSION['cpic'] ?>" width="30px" height="30px" style="border-radius: 30%; " /></li>
					&nbsp;&nbsp;
					<li class="nav-item nav-link" style="color: white; top: 340px !important;">
						<b><?= $_SESSION['cname'] ?></b>
					</li>

				<?php
				} else {
				?>
					<li class="nav-item"><a href="login(user).php" class="nav-link">Login</a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</nav>