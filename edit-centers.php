<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$CENTER = new Center($id);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>Edit Center</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css"/>
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
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Center</a></li>
                                                <li class="breadcrumb-item active">Edit Center - " <?php echo $CENTER->name ?> "</li>
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
                                            <h4 class="mt-0 header-title">Edit Center.</h4>
                                            <p class="text-muted m-b-30 font-14">
                                                Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code>

                                            </p>


                                            <form id="form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Please Select District </label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" id="district" name="district">
                                                            <option> -- Select District -- </option> 
                                                            <?php
                                                            $DISTRICT = new District(NULL);
                                                            foreach ($DISTRICT->all() as $district) {
                                                                if ($CENTER->district == $district['id']) {
                                                                    ?>
                                                                    <option value="<?php echo $district['id'] ?>" selected=""><?php echo $district['name'] ?></option> 
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $district['id'] ?>" ><?php echo $district['name'] ?></option> 
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-sm-2 col-form-label">Enter Center</label>
                                                    <div class="col-sm-10"><input class="form-control" type="text"   id="center" name="name" autocomplete="off" value="<?php echo $CENTER->name ?>"/></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10"></div>
                                                    <div class="col-md-2"> 
                                                        <div class="form-group ">
                                                            <button type="button" class="btn btn-success ml-2 float-right" id="update">Update</button>
                                                            <input type="hidden" name="update">
                                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                                        </div>    
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

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
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/center.js" type="text/javascript"></script>
        <script src="assets/js/app.js"></script>
    </body>

</html>
