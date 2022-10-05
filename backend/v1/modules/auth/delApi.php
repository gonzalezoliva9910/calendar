<?php
include_once "../../shared/response.php";
include_once "../../../bd/conexion.php";

$body = json_decode(file_get_contents('php://input'), true);

if ($body  == null) {
    response(3, "NO se espesifico el id ", " ");
} else {
    $id = $body['id'];

    if ($id  == null) {
        response(3, "NO se espesifico el id", " ");
    } else {
        $sql = "DELETE  FROM nota WHERE id=?";

        $stmt = $conn->prepare($sql);
    }
}

if ($stmt->execute([$id])) {

    response(1, "TODO OK ", " ");
}
