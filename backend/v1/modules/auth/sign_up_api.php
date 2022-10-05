<?php
include_once "../shared/response.php";
include_once "../../../bd/conexion.php";


$body = json_decode(file_get_contents('php://input'), true);
$condicional = false;

if ($body  == null) {
    response(3, "NO se estan enviando datos ", " ");
} else {

    $password = $body['password'];
    $password = md5($password);

    $result = verificated($conn);


    if ($password == null) {
        response(3, "NO se estan enviando datos ", " ");
    } else if ($result == null) {
        $sql = "INSERT INTO `password` (`value`) VALUES (?)";

        $stmt = $conn->prepare($sql);
        $condicional = $stmt->execute([$password]);
    } else {
        response(3, "YA hay una contrasena guardada", " ");
    }
}

if ($condicional) {
    response(1, "TODO OK ", " ");
}



function verificated($conn)
{
    $sql = "SELECT * FROM  `password`";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
