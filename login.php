<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <!--                    <h3 class="text-center mt-0 m-b-15">
                                            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="24" alt="logo" /></a>
                                        </h3>-->
                    <div class="p-3">
                        <form class="form-horizontal m-t-20" method="POST" id="formlogin">
                            <div class="form-group row">
                                <div class="col-12"><input class="form-control" type="text"  name="username" id="username" data-field="username" placeholder="Username" />
                                    <div class="valid-message"></div> 
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-12"><input class="form-control" name="password" data-field="password" id="password" type="password" placeholder="Password" /></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 message" id="message">
                                </div>
                            </div>
                            <div class="form-group text-center row m-t-20">
                                <div class="col-12"><button class="btn btn-danger btn-block waves-effect waves-light" id="login" type="submit">Log In</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery  -->
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
        <script src="assets/js/validator.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.js" type="text/javascript"></script>
        <script src="ajax/js/login.js" type="text/javascript"></script>
    </body>

</html>

