<?php
    include "conexion.php";

    $cedula = $_POST['est_cedula'];
    $nombre = $_POST['est_nombre'];
    $apellido = $_POST['est_apellido'];
    $direccion = $_POST['est_direccion'];
    $telefono = $_POST['est_telefono'];

    $sqlSelect = "insert into estudiantes(est_cedula, est_nombre, est_apellido, est_direccion, est_telefono)
    values('$cedula','$nombre', '$apellido', '$direccion', '$telefono')";

    if ($mysqli->query($sqlSelect)) {
        echo json_encode("Se guardó");
    } else {
        echo json_encode("Error ".$sqlSelect.$mysqli -> error);
    }