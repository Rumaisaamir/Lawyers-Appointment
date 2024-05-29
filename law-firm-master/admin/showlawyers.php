<?php

include("dbconn.php");

$query = "select c_name,lid,Lmail,Lpass,l_detail,l_pic,l_name from lawyers join category on lawyers.cid=category.cid";
$rawData = mysqli_query($conn, $query);

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
                  <h3 class="blank1">Customer Details</h3>
                  <div class="xs tabls">
                     <div class="bs-example4" data-example-id="contextual-table">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Lawyers Id</th>
                                 <th>Lawyers Name</th>
                                 <th>Lawyers Email</th>
                                 <th>Lawyers Password</th>
                                 <th>Lawyers c_id</th>
                                 <th>Lawyers details</th>
                                 <th>Lawyers Profile</th>
                                 <th colspan="2">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              while ($row = mysqli_fetch_array($rawData))    //mysqli_fetch_assoc() returns string indexing of columns and mysqli_fetch_array() returns both
                              {
                              ?>

                                 <tr>
                                    <td><?= $row["lid"] ?></td>
                                    <td><?= $row["l_name"] ?></td>
                                    <td><?= $row[2] ?></td>
                                    <td><?= $row[3] ?></td>
                                    <td><?= $row['c_name'] ?></td>
                                    <td><?= $row['l_detail'] ?></td>
                                    <td><img src="<?= $row['l_pic'] ?>" width="80px" height="80px" /></td>
                                    <td><a href="deletelawyer.php?id=<?= $row['lid']; ?>">Delete</a>
                                    </td>
                                 </tr>
                              <?php
                              }
                              ?>
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