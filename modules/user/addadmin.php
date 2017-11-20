<?php
    define("IN_SITE", true);
    include_once("../../libs/functions.php");
    session_start();
    $admin_list = getAdminInfo();
    $numAdmin = count($admin_list);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../../plugins/images/favicon.png">
        <title>Người quản trị</title>
        <!-- Bootstrap Core CSS -->
        <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="../../plugins/components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- toast CSS -->
        <link href="../../plugins/components/toast-master/css/jquery.toast.css" rel="stylesheet">

        <!-- morris CSS -->
        <link href="../../plugins/components/morrisjs/morris.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="../../plugins/components/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="../../plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="../../css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../../css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="../../css/colors/default.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                                <li><a href="#">Dashboard</a></li>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- ============================================================== -->
                    <!-- Different data widgets -->
                    <!-- ============================================================== -->
                    <!-- .row -->

                    <!--/.row -->
                    <!--row -->
                    <!-- /.row -->
                    <!-- ============================================================== -->
                    <!-- Bang danh sach cac khach hang -->
                    <!-- ============================================================== -->
                    <div class="container">

                        <form class="form-horizontal">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Thêm tài khoản</legend>



                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Tài khoản</label>
                                    <div class="col-md-4">
                                        <input id="textinput" name="textinput" type="text" placeholder="username" class="form-control input-md">
                                    </div>
                                </div>

                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="passwordinput">Mật khẩu</label>
                                    <div class="col-md-4">
                                        <input id="passwordinput" name="passwordinput" type="password" placeholder="password" class="form-control input-md">
                                    </div>
                                    
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                   <lable class="col-md-4"></lable>
                                    <div class="col-md-4">
                                        <button id="singlebutton" name="create" class="btn btn-primary">Tạo</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>


                    </div>
                    <!-- /container -->
                    <!-- /.row -->
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
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../../plugins/components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="../../plugins/components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="../../js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="../../js/waves.js"></script>
        <!--Counter js -->
        <script src="../../plugins/components/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../../plugins/components/counterup/jquery.counterup.min.js"></script>
        <!-- chartist chart -->
        <script src="../../plugins/components/chartist-js/dist/chartist.min.js"></script>
        <script src="../../plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <!-- Sparkline chart JavaScript -->
        <script src="../../plugins/components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../../js/custom.min.js"></script>
        <script src="../../js/dashboard1.js"></script>
        <script src="../../plugins/components/toast-master/js/jquery.toast.js"></script>
    </body>

    </html>
