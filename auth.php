<?php
include '/class/include.php';
if (!isset($_SESSION)) {
    session_start();
} 

//if (isset($_SESSION['id'])) {
//    if (time() - $_SESSION['login_time'] > 10000) {
//        redirect('login.php');
//    }
//}
 
if (!User::authenticate()) {
    redirect('./login.php');
}
//
//$USER_ID =  new User($_SESSION['id']);
//$USER_ID->updateLastActionTime();