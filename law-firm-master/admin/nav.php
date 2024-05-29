<?php
@session_start();
ob_start();
include("dbconn.php");
?><div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <h1><a href="index.php"><span>Dashboard</span></a></h1>
    </div>
    <div class="logo-icon text-center">
        <a href="index.php"><i class="lnr lnr-home"></i> </a>
    </div>

    <!--logo and iconic logo end-->
    <div class="left-side-inner">

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li><a href="index.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
            <li><a href="showlawyers.php"><i class="lnr lnr-cog"></i><span>Lawyers</span></a></li>
            <li><a href="reviews.php"><i class="lnr lnr-cog"></i><span>Reviews</span></a>
            <li><a href="showbooking.php"><i class="lnr lnr-cog"></i><span>Booking Details</span></a></li>
            <li><a href="usermsg.php"><i class="lnr lnr-cog"></i><span>Message</span></a></li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Customer</span></a>
                <ul class="sub-menu-list">
                    <li><a href="showcustomer.php">Show Customers</a> </li>
                </ul>
            <li class="menu-list">
                <a href="showcategory.php"><i class="lnr lnr-cog"></i>
                    <span>Category</span></a>
                <ul class="sub-menu-list">
                    <li><a href="showcategory.php">Show Category</a> </li>
                    <li><a href="addcategory.php">Add Category</a> </li>
                </ul>

        </ul>
        <!--sidebar nav end-->
    </div>
</div>