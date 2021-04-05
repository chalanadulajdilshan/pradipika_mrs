<?php

include '../../class/include.php';


//Create
if (isset($_POST['create'])) {
    $MODULE = new Module(NULL);

    $MODULE->course = $_POST['id'];
    $MODULE->semester = $_POST['sem'];
    $MODULE->module_number = $_POST['number'];
    $MODULE->name = $_POST['name'];

    $MODULE->create();

    if ($MODULE) {
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

    $MODULE = new Module($_POST['id']);

    $MODULE->name = $_POST['name'];
    $MODULE->module_number = $_POST['number'];

    $MODULE->update();

    if ($MODULE) {
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

 