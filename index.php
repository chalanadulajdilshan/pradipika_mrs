<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
include './auth.php';
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link href="assets/plugins/morris/morris.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status"><div class="spinner"></div></div>
        </div>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <?php include './navigation.php'; ?>
            <!-- Left Sidebar End --><!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <!-- Top Bar Start -->
                    <?php include './top-bar.php'; ?>
                    <!-- Top Bar End -->
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round"><i class="mdi mdi-webcam"></i></div>
                                                </div>
                                                <div class="col-6 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner">$18090</h5>
                                                        <p class="mb-0 text-muted">Visits Today</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"><i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column --><!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round"><i class="mdi mdi-account-multiple-plus"></i></div>
                                                </div>
                                                <div class="col-6 text-center align-self-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner">562</h5>
                                                        <p class="mb-0 text-muted">New Users</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"><i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column --><!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round"><i class="mdi mdi-basket"></i></div>
                                                </div>
                                                <div class="col-6 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner">7514</h5>
                                                        <p class="mb-0 text-muted">New Orders</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-danger"><i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column --><!-- Column -->
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round"><i class="mdi mdi-rocket"></i></div>
                                                </div>
                                                <div class="col-6 align-self-center text-center">
                                                    <div class="m-l-10">
                                                        <h5 class="mt-0 round-inner">$32874</h5>
                                                        <p class="mb-0 text-muted">Total Sales</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 align-self-end align-self-center">
                                                    <h6 class="m-0 float-right text-center text-success"><i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                          
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="card bg-info m-b-30">
                                        <div class="card-body">
                                            <div id="verticalCarousel" class="carousel slide vertical" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="row d-flex justify-content-center text-center">
                                                            <div class="col-sm-12 carousel-icon"><i class="fa fa-twitter text-white pt-3"></i></div>
                                                            <div class="col-6 text-white">
                                                                <h2>54k</h2>
                                                                <p class="">Followers</p>
                                                            </div>
                                                            <div class="col-6 text-white">
                                                                <h2>44k</h2>
                                                                <p class="">Tweets</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="col-sm-12 carousel-icon text-center"><i class="fa fa-twitter text-white pt-3"></i></div>
                                                            <div class="col-sm-10 mx-auto text-white text-center">
                                                                <p>Lorem Ipsum is simply dummy text of the <span class="warning">#TWITTER</span> and typesetting industry. A description list is perfect for defining terms.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                        <!-- container -->
                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->
                <footer class="footer">© 2019 Annex by Mannatthemes.</footer>
            </div>
            <!-- End Right content here -->
        </div>
        <!-- END wrapper --><!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/skycons/skycons.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/pages/dashborad.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== "undefined") {
                var icons = new Skycons({color: "#fff"}, {resizeClear: true}),
                        list = ["clear-day", "clear-night", "partly-cloudy-day", "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind", "fog"],
                        i;

                for (i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            }

            // scroll

            $(document).ready(function () {
                $("#boxscroll").niceScroll({cursorborder: "", cursorcolor: "#cecece", boxzoom: true});
                $("#boxscroll2").niceScroll({cursorborder: "", cursorcolor: "#cecece", boxzoom: true});
            });
        </script>
    </body>

</html>
