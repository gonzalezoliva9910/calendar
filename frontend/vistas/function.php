<?php
include_once "../modules/shared/requests.php";

$data = get("http://localhost:88/Calendar/backend/v1/modules/auth/check_api.php");
$password = $_POST['password'];

if (json_decode($data[2]['password']) == $password ) {
  echo "si";
} else {
    echo "no";
}
    

