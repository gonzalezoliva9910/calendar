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
    echo '<script language="javascript">alert("Ya existe una contraseña");</script>';

    echo '<script language="javascript"> 
setTimeout(function whait(){
    location.replace("../vistas/vista_sign_up.php")
},50)
</script>';

    
} else {
    echo '<script language="javascript">alert("Las contraseñas no coinciden");</script>';

    echo '<script language="javascript"> 
setTimeout(function whait(){
    location.replace("../vistas/vista_sign_up.php")
},50)
</script>';
}

