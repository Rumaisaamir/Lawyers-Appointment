<?php

include("dbconn.php");

$query = "select * from category";
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
                <div id="page-wrapper">
                    <div class="graphs">
                        <h3 class="blank1">ADD CATEGORY</h3>
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" required class="form-control1" id="focusedinput" name="name" placeholder="Enter Category Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Details</label>
                                        <div class="col-sm-8">
                                            <input type="text" required class="form-control1" id="focusedinput" name="detail" placeholder="Enter Category Detail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" required class="form-control1" id="focusedinput" name="icon" placeholder="Enter Category Icon">
                                        </div>
                                    </div>

                                    <div class="form-group text-center">
                                        <input type="submit" value="Send" name="btn_reg" class="btn btn-primary py-2 px-4 ">
                                    </div>

                                    <?php

                                    if (isset($_POST['btn_reg'])) {

                                        $name = $_POST['name'];
                                        $detail = $_POST['detail'];
                                        $icon = $_POST['icon'];
                                        $query = "insert into category values ('','" . $name . "','" . $detail . "','" . $icon . "')";
                                        $insert = mysqli_query($conn, $query);
                                        if ($insert) {
                                            echo "<p class='text-success'>Category Added!!!! </p>";
                                            echo "<br/><a href='showcategory.php'> Go Back</a>";
                                        } else {
                                            echo "<p class='text-danger'>" . mysqli_error($conn) . "</p>";
                                        }
                                    }

                                    ?>
                                </form>
                            </div>
                        </div>