<?php
include("dbconn.php");

$id = $_GET['id'];

$query = "select * from category where cid = $id";
$rawData = mysqli_query($conn, $query);

$row = mysqli_fetch_array($rawData);
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Dashboard</title>
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
                        <h3 class="blank1">Update Customer Details</h3>
                        <div class="xs tabls">
                            <div class="bs-example4" data-example-id="contextual-table">

                                <div class="row block-9">

                                    <div class="col-md-3"></div>

                                    <div class="col-md-6 order-md-last d-flex">
                                        <form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="uname" placeholder="Category Name" value="<?= $row[1] ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="udetail" placeholder="Category Detail" value="<?= $row[2] ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="uicon" placeholder="Category Icon" value="<?= $row[3] ?>">
                                            </div>

                                            <div class="form-group text-center">
                                                <input type="submit" value="Save Changes" name="btn_upd" class="btn btn-primary py-2 px-4">
                                            </div>
                                            <br />

                                            <?php
                                            if (isset($_POST['btn_upd'])) {
                                                $uname = $_POST['uname'];
                                                $uicon = $_POST['uicon'];
                                                $udetail = $_POST['udetail'];

                                                $query = "update category set c_name='" . $uname . "',c_details='" . $udetail . "',c_icon='" . $uicon . "' where cid= $id";
                                                $update = mysqli_query($conn, $query);
                                                if ($update) {
                                                    echo "<p class='text-success'Category updated successfully!!</p>";
                                                    echo "<br/><a href='showcategory.php'> Go Back</a>";
                                                } else {
                                                    echo "<p class='text-danger'>" . mysqli_error($conn) . "</p>";
                                                }
                                            }

                                            ?>



                                        </form>
                                    </div>
                                </div>
                            </div>




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