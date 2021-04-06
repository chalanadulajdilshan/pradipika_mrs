<!DOCTYPE html>
<?php
include_once(dirname(__FILE__) . '/class/include.php');
include './auth.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>VTA - Add Student Result</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
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
                                                <li class="breadcrumb-item"><a href="#">VTA</a></li>
                                                <li class="breadcrumb-item"><a href="#">Student</a></li>
                                                <li class="breadcrumb-item active">Add Student</li>
                                            </ol>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Add new Student.</h4>
                                            <hr>
<!--                                            <p class="text-muted m-b-30 font-14">
                                                Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code>
                                                <code class="highlighter-rouge">type</code>.
                                            </p>-->

                                            <div class="form-group row">
                                                <div class="col-md-12"><h6 class="text-muted fw-400 mt-3">Name</h6>
                                                    <input type="text" class="form-control" value="Saman Kumara" readonly="true">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6"><h6 class="text-muted fw-400 mt-3">Student Id</h6>
                                                    <input type="text" class="form-control" value="Input Mask" readonly="true">
                                                </div>
                                                <div class="col-md-6"><h6 class="text-muted fw-400 mt-3">MIS No</h6>
                                                    <input type="text" class="form-control" value="Input Mask" readonly="true">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-4"><h6 class="text-muted fw-400 mt-3">Course</h6>
                                                    <input type="text" class="form-control" value="ICT 5" readonly="true">
                                                </div>
                                                <div class="col-md-4"><h6 class="text-muted fw-400 mt-3">Batch</h6>
                                                    <input type="text" class="form-control" value="2019" readonly="true">
                                                </div>
                                                <div class="col-md-4"><h6 class="text-muted fw-400 mt-3">District</h6>
                                                    <input type="text" class="form-control" value="Galle" readonly="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="alert alert-info" role="alert"><strong>Semester 1</strong></div>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Module Name</th>
                                                        <th>Result</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>        
                                                            Module Name
                                                        </td>
                                                        <td>
                                                            <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Result -- </option>
                                                                <option value="nc">NC(Not Compitant)</option>
                                                                <option value="c">C(Compitant)</option>
                                                                <option value="ab">Ab(Absent)</option>
                                                            </select>
                                                        </td>
                                                        <td>   <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Batch -- </option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>        
                                                            Module Name
                                                        </td>
                                                        <td>
                                                            <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Result -- </option>
                                                                <option value="nc">NC(Not Compitant)</option>
                                                                <option value="c">C(Compitant)</option>
                                                                <option value="ab">Ab(Absent)</option>
                                                            </select>
                                                        </td>
                                                        <td>   <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Batch -- </option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                            </select></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="alert alert-info" role="alert"><strong>Semester 2</strong></div>                                   
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Module Name</th>
                                                        <th>Result</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>        
                                                            Module Name
                                                        </td>
                                                        <td>
                                                            <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Result -- </option>
                                                                <option value="nc">NC(Not Compitant)</option>
                                                                <option value="c">C(Compitant)</option>
                                                                <option value="ab">Ab(Absent)</option>
                                                            </select>
                                                        </td>
                                                        <td>   <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Batch -- </option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>        
                                                            Module Name
                                                        </td>
                                                        <td>
                                                            <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Result -- </option>
                                                                <option value="nc">NC(Not Compitant)</option>
                                                                <option value="c">C(Compitant)</option>
                                                                <option value="ab">Ab(Absent)</option>
                                                            </select>
                                                        </td>
                                                        <td>   <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Batch -- </option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                            </select></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="alert alert-info" role="alert"><strong>VIVA</strong></div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Result</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>
                                                            <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Result -- </option>
                                                                <option value="nc">NC(Not Compitant)</option>
                                                                <option value="c">C(Compitant)</option>
                                                                <option value="ab">Ab(Absent)</option>
                                                            </select>
                                                        </td>
                                                        <td>   <select class="form-control"  id="example-email-input" >
                                                                <option> -- Select Batch -- </option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                            </select></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="text-right m-t-15"><a href="add-student-result.php" class="btn btn-primary waves-effect waves-light">Add Result</a></div>
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
                <footer class="footer">© 2021 VTA.</footer>
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
    <!-- Mirrored from mannatthemes.com/annex/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 03:59:09 GMT -->
</html>
