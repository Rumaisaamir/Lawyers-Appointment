<?php

include("dbconn.php");
@session_start();
ob_start();
$name = $_SESSION['lname'];
$query = "SELECT bid,Cname,l_name,bdate,btime FROM `bookings` JOIN customer on customer.cs_id=bookings.cs_id JOIN lawyers ON lawyers.lid=bookings.lid where l_name='$name';";
$rawData = mysqli_query($conn, $query);
$rowlaw = mysqli_fetch_array($rawData);
//print_r($rawData);

?>
<!DOCTYPE HTML>
<html>

<head>
   <title>Dashboard</title>
   <?php
   include('header.php');
   ?>

</head>

<body class="sticky-header left-side-expanded" onload="initMap()">
   <section>
      <!-- left side start-->
      <?php
      include('nav.php');
      ?>
      <!-- left side end-->

      <!-- main content start-->
      <div class="main-content main-content4">
         <!-- header-starts -->
         <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <?php
            include('notif.php');
            ?>
            <!--notification menu end -->

            <!-- //header-ends -->
            <div id="page-wrapper">
               <div class="graphs">
                  <h3 class="blank1">Booking Details</h3>
                  <div class="xs tabls">
                     <div class="bs-example4" data-example-id="contextual-table">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Booking Id</th>
                                 <th>Booking cs_id</th>
                                 <th>Booking date</th>
                                 <th>Booking time</th>
                                 <th colspan="2">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><?= $rowlaw["bid"] ?></td>
                                 <td><?= $rowlaw["Cname"] ?></td>
                                 <td><?= $rowlaw["bdate"] ?></td>
                                 <td><?= $rowlaw["btime"] ?></td>

                                 <td><a href="deleteuser.php?id=<?= $rowlaw[0]; ?> ">Delete</a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

                  </div>
               </div>
            </div>
            <!--footer section start-->
            <footer>
               <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
            </footer>
            <!--footer section end-->
   </section>

   <script src="js/jquery.nicescroll.js"></script>
   <script src="js/scripts.js"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>

</html>