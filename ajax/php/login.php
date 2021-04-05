<?php
include '../../class/include.php';

$USER = new User(NULL);

$username =  $_POST['username'];
$password = $_POST['password'];
 
if ($USER->login($username, $password)) {
    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'error';
    $response['message'] = "Username or Password went wrong";
    echo json_encode($response);
    exit(); 
}
?>