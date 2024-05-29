<?php
@session_start();
ob_start();
if (!isset($_SESSION['lname'])) {
	header('Location:sign-in.php');
}

?>

<!--notification menu start -->
<div class="menu-right">
	<div class="user-panel-top">
		<div class="profile_details">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<div class="profile_img">
							<span style="background:url(<?= $_SESSION['pic'] ?>);justify-items: stretch !important; align-items: center !important;"> </span>
							<div class="user-name">
								<p><?= $_SESSION['lname'] ?></p>
							</div>
							<i class="lnr lnr-chevron-down"></i>
							<i class="lnr lnr-chevron-up"></i>
							<div class="clearfix"></div>
						</div>
					</a>
					<ul class="dropdown-menu drp-mnu">
						<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
						<li> <a href="sign-out.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
					</ul>
				</li>
				<div class="clearfix"> </div>
			</ul>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!--notification menu end -->
</div>