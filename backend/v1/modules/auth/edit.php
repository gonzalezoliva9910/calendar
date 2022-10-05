<?php

$id = $_GET['id'];

$sql = " SELECT*  FROM nota WHERE id=?";

$stmt = $conn->prepare($sql);

$stmt->execute([$id]);

$result = $stmt->fetch  (PDO::FETCH_ASSOC);


