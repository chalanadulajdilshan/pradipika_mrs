<?php

include '../../class/include.php';
 
//Create
if (isset($_POST['create'])) {
    $COURSES = new Courses(NULL);

    $COURSES->center = $_POST['id'];
    $COURSES->name = $_POST['name'];

    $COURSES->create();

    if ($COURSES) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

//Update
if (isset($_POST['update'])) {

    $COURSES = new Courses($_POST['id']);

    $COURSES->name = $_POST['name']; 

    $COURSES->update();

    if ($COURSES) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

 