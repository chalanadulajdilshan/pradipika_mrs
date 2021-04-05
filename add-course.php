<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>Add Course</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/preloader.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fixed-left someBlock" >
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
                                                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                                                <li class="breadcrumb-item active">Add Courses</li>
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
                                            <h4 class="mt-0 header-title">Add Course Details.</h4>
                                            <p class="text-muted m-b-30 font-14">
                                                Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code>
                                                <code class="highlighter-rouge">type</code>.
                                            </p>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Course Name</label>
                                                <div class="col-sm-10"><input class="form-control" type="text"  id="example-text-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                                <div class="col-sm-10"><input class="form-control" type="search" value="How do I shoot web" id="example-search-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10"><input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                                <div class="col-sm-10"><input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                                <div class="col-sm-10"><input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10"><input class="form-control" type="password" value="hunter2" id="example-password-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                                <div class="col-sm-10"><input class="form-control" type="number" value="42" id="example-number-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                                <div class="col-sm-10"><input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10"><input class="form-control" type="date" value="2011-08-19" id="example-date-input" /></div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Please Select District </label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="district">
                                                        <option> -- Select District -- </option> 
                                                        <?php
                                                        $DISTRICT = new District(NULL);
                                                        foreach ($DISTRICT->all() as $district) {
                                                            ?>
                                                            <option value="<?php echo $district['id'] ?>"><?php echo $district['name'] ?></option> 
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Please Select City </label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select" id="city-bar">
                                                        <option selected="selected">Please Select District First </option> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input-lg" class="col-sm-2 col-form-label">Large</label>
                                                <div class="col-sm-10"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg" /></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input-sm" class="col-sm-2 col-form-label">Small</label>
                                                <div class="col-sm-10"><input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm" /></div>
                                            </div>
                                            <div class="form-group row has-success">
                                                <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com" />
                                                    <div class="form-control-feedback">Success! You've done it.</div>
                                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-warning">
                                                <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com" />
                                                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
                                            <div class="form-group row has-danger">
                                                <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com" />
                                                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/jquery.preloader.min.js" type="text/javascript"></script>
        <script src="ajax/js/city.js" type="text/javascript"></script>

    </body>

</html>
