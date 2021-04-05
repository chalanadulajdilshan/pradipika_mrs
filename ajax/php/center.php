<?php

include '../../class/include.php';
header('Content-Type: application/json; charset=UTF8');

//Create
if (isset($_POST['create'])) {
    $CENTER = new Center(NULL);

    $CENTER->district = $_POST['district'];
    $CENTER->name = $_POST['name'];

    $CENTER->create();

    if ($CENTER) {
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

    $CENTER = new Center($_POST['id']);

    $CENTER->name = $_POST['name'];
    $CENTER->district = $_POST['district'];

    $CENTER->update();

    if ($CENTER) {
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
//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $CENTER = Product::arrange($key, $img);
        header('Location:../../../arrange-product.php?message=9');
    }
}



 