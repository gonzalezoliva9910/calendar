<?php

include_once "../shared/response.php";
include_once "../../../bd/conexion.php";

$body = json_decode(file_get_contents('php://input'), true);

if ($body  == null) {
    response(3, "NO se estan enviando datos ", " ");
} else {
    $password = $body['password'];

    $sql = "SELECT * FROM  `password`  ";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$verificated = md5($password);

if ($result != null)
    $result = $result[0]["value"];

if ($result == $verificated) {

    response(1, "Es correcta", "");
} else {

    response(3, "No es correcta", "");
}
