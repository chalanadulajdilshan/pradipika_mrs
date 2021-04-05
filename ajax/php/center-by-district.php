<?php

include '../../class/include.php';
 

if ($_POST['action'] == 'GETCENTERSBYDISTRICT') {

    $CENTER = new Center(NULL);

    $result = $CENTER->getCentersByDistrict($_POST["district"]);
    echo json_encode($result);

    exit();
}



 