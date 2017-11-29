<?php
define("IN_SITE", true);
include_once("../../libs/functions.php");
session_start();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Người quản trị</title>
        <?php include_once('../components/style.php') ?>
    </head>

    <body class="fix-header">
        <!-- ============================================================== -->
        <!-- Preloader -->
        <!-- ============================================================== -->
        <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->
        <!-- ============================================================== -->
        <!-- Wrapper -->
        <!-- ============================================================== -->
        <div id="wrapper">
            <?php include_once("../widgets/header.php");?>

            <?php include_once("../widgets/sidebar.php");?>
            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="main.php">Dashboard</a></li>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->


                    <!-- ============================================================== -->
                    <!-- Different data widgets -->
                    <!-- ============================================================== -->
                    <!-- .row -->
                    <?php
                    $num_order = getNumOrders();
                    $num_user = getNumUsers();
                    $total_prices = getTotalPrices();
                ?>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="white-box analytics-info">
                                    <h3 class="box-title">Tổng số khách hàng</h3>
                                    <ul class="list-inline two-part">
                                        <li>
                                            <div id="sparklinedash">
                                                <canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                            </div>
                                        </li>
                                        <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $num_user; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="white-box analytics-info">
                                    <h3 class="box-title">Tổng số đơn hàng</h3>
                                    <ul class="list-inline two-part">
                                        <li>
                                            <div id="sparklinedash2">
                                                <canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                            </div>
                                        </li>
                                        <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?php echo $num_order; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="white-box analytics-info">
                                    <h3 class="box-title">Tổng số tiền</h3>
                                    <ul class="list-inline two-part">
                                        <li>
                                            <div id="sparklinedash3">
                                                <canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                            </div>
                                        </li>
                                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $total_prices; ?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- ============================================================== -->
                        <!-- Noi dung trang -->
                        <!-- ============================================================== -->
                        <?php 
                    $main = $_GET['a'] ?? '';
                    
                    switch($main){
                        case 'products':
                            include_once('../management/products.php');
                            break;
                        case 'admin';
                            include_once('../user/admin.php');
                            break;
                        case 'orders':
                            include_once('../management/orderlist.php');
                            break;
                        case 'customer':
                            include_once('../user/customer.php');
                            break;
                        case 'author':
                            include_once('../management/author.php');
                            break;
                        case 'category':
                            include_once('../management/category.php');
                            break;
                        case 'publisher':
                            include_once('../management/publisher.php');
                            break;
                    }
                ?>
                        <!-- ============================================================== -->
                        <!-- chat-listing & recent comments -->
                        <!-- ============================================================== -->
                </div>
                <!-- /.container-fluid -->
                <?php include_once("../widgets/footer.php"); ?>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <?php include_once('../components/script.php') ?>
       
    </body>

    </html>
