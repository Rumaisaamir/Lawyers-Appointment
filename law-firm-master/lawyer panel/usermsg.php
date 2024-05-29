<?php

include("dbconn.php");
@session_start();
ob_start();
$id = $_SESSION['id'];
$query = "SELECT lid,cl_id,cl_name,cl_msg,cl_mail FROM consultant JOIN category on category.cid=consultant.cid JOIN lawyers ON consultant.cid=lawyers.cid where lid=$id";
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
                  <h3 class="blank1">usermsg Details</h3>
                  <div class="xs tabls">
                     <div class="bs-example4" data-example-id="contextual-table">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Booking Id</th>
                                 <th>Customer Name</th>
                                 <th>Customer Email Id</th>
                                 <th>Customer Message</th>
                                 <th colspan="2">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><?= $rowlaw["cl_id"] ?></td>
                                 <td><?= $rowlaw["cl_name"] ?></td>
                                 <td><?= $rowlaw["cl_mail"] ?></td>
                                 <td><?= $rowlaw["cl_msg"] ?></td>

                                 <td><a style="color: white;background-color: Green;border-radius: 20px ; padding: 5px; margin: 3px;" href="#">Accept</a>&nbsp;<a style="color: white;background-color: red;border-radius: 20px ; padding: 5px; margin: 3px;" href="#">Decline</a>
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