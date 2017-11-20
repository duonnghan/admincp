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
                    <!-- Them sach -->
                    <!-- ============================================================== -->
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Thêm sách</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_name">Tên sách</label>
                                <div class="col-md-4">
                                    <input id="book_name" name="book_name" type="text" placeholder="tên đầu sách" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_price">Giá</label>
                                <div class="col-md-4">
                                    <input id="book_price" name="book_price" type="text" placeholder="giá" class="form-control input-md">

                                </div>
                            </div>

                           <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_author">Tác giả</label>
                                <div class="col-md-4">
                                    <input id="book_author" name="book_author" type="text" placeholder="tên tác giả" class="form-control input-md">

                                </div>
                            </div>
                            
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_publisher">Nhà xuất bản</label>
                                <div class="col-md-4">
                                    <input id="book_publisher" name="book_publisher" type="text" placeholder="nhà xuất bản" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_quantity">Số lượng</label>
                                <div class="col-md-2">
                                    <input id="book_quantity" name="book_quantity" type="text" placeholder="số lượng" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_category">Danh mục</label>
                                <div class="col-md-2">
                                    <select id="book_category" name="book_category" class="form-control">
                                      <option value="1">Option one</option>
                                      <option value="2">Option two</option>
                                    </select>
                                </div>
                            </div>

                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_cover">Ảnh bìa</label>
                                <div class="col-md-4">
                                    <input id="book_cover" name="book_cover" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="book_description">Mô tả</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="book_description" name="book_description">mô tả ngắn gọn về sách</textarea>
                                </div>
                            </div>

                            

                            
                              <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="button1id"></label>
                                <div class="col-md-8">
                                    <button id="button1id" name="button1id" class="btn btn-success">Thêm</button>
                                    <button id="button2id" name="button2id" class="btn btn-inverse">Hủy</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

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
