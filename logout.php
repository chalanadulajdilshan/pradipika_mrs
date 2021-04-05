<?php
include '/class/include.php';

$USER = new User();
if ($USER->logOut()) {
    header('Location:login.php');
} else {
    header('Location: ./?message=2');
}

