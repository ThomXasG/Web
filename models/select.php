<?php
    include "conexion.php";

    $sql = "SELECT * FROM estudiantes";
    $result = $conn->query($sql);

    $resultado = array();

    while($fila = $result->fetch_array()) {
        array_push($resultado, $fila);
    }

    echo json_encode($resultado);