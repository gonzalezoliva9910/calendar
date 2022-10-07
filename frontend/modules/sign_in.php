<?php
include_once "./shared/requests.php";


$password = $_POST['password'];

$result = post("http://localhost:88/Calendar/backend/v1/modules/auth/sign_in_api.php", array(
    'password' => $password
));

if ($result['code'] == 1) {
    header('location:../home.php');
} elseif ($result['code'] == 3) {
   header("location:../vistas/vista_sign_in.php?fallo=true");
}
   

//     echo '<script language="javascript"> 
// setTimeout(function whait(){
//     location.replace("../vistas/vista_sign_in.php")
//  },50)
// </script>';


?>

