<?php
include_once "./shared/requests.php";


$password = $_POST['password'];
$password1 = $_POST['password1'];

if ($password == $password1) {
    $result = post("http://localhost:88/Calendar/backend/v1/modules/auth/sign_up_api.php", array(
        'password' => $password

    ));
    if ($result['code'] == 1) {
        header('location:../vistas/vista_sign_in.php');
    } elseif ($result['code'] == 3)
    header('location:../vistas/vista_sign_up.php?fallo=x');

    
} else {
    header('location:../vistas/vista_sign_up.php?fallo=z');
}

