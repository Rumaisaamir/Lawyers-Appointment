<?php
@session_start();

if (!isset($_SESSION['name'])) {
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
							<span style="background:url(images/1.jpg) no-repeat center"> </span>
							<div class="user-name">
								<p><?= $_SESSION['name'] ?></p>
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