<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css"/>
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
                                            <form id="form-data">
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Course Name</label>
                                                    <div class="col-sm-10"><input class="form-control" type="text"  id="name" name="name"/></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-10"></div>
                                                    <div class="col-md-2"> 
                                                        <div class="form-group ">
                                                            <button type="button" class="btn btn-success ml-2 float-right" id="create">Create</button>
                                                            <input type="hidden" name="create">
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


                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Manage Courses</h4>
                                            <p class="text-muted m-b-30 font-14">
                                                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the
                                                based framework upon which plug-ins can built.
                                            </p>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>id</th> 
                                                        <th>Course Name</th> 
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $COURSES = new Courses(NULL);
                                                    foreach ($COURSES->getCoursesByCenter($id) as $key => $courses) {
                                                        $key++;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $key ?></td>   
                                                            <td><?php echo $courses['name'] ?></td>
                                                            <td> 
                                                                <p>
                                                                    <a  href="add-module.php?id=<?php echo $courses['id'] ?>&&sem=1" class="tabledit-edit-button btn btn-sm btn-warning" >SEMESTER 1</a>   | 
                                                                    <a  href="add-module.php?id=<?php echo $courses['id'] ?>&&sem=2" class="tabledit-edit-button btn btn-sm btn-success" >SEMESTER 2</a> |  
                                                                    <a  href="edit-course.php?id=<?php echo $courses['id'] ?>" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">EDIT</a> 
                                                                </p>
                                                            </td>

                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>

                        </div>
                        <!-- container -->
                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->
                <footer class="footer">?? 2019 Annex by Mannatthemes.</footer>
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

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#datatable2").DataTable();
            });
        </script>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/course.js" type="text/javascript"></script>


    </body>

</html>
