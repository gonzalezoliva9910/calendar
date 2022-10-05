<?php
include_once "../shared/response.php";
include_once "../../../bd/conexion.php";

$sql = "SELECT * FROM  `password`";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($result == null) {
    response(3, "No existe contraseña ", " ");
} else {
    response(1, "Todo bien", json_encode($result,true) );
}
