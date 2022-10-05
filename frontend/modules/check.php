<?php
include_once "./shared/requests.php";
$data = get("http://localhost:88/Calendar/backend/v1/modules/auth/check_api.php");


if ($data['code'] == 1) {
    header('location:../vistas/vista_sign_in.php');
} else {
    header('location:../vistas/vista_sign_up.php');
}
