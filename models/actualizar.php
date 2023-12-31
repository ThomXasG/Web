<?php
    include "conexion.php";

    $cedula = $_POST['est_cedula'];
    $nombre = $_POST['est_nombre'];
    $apellido = $_POST['est_apellido'];
    $direccion = $_POST['est_direccion'];
    $telefono = $_POST['est_telefono'];


    $sqlAct = "update estudiantes set est_cedula='$cedula', est_nombre='$nombre', est_apellido='$apellido',
    est_direccion='$direccion', est_telefono='$telefono' where est_cedula='$cedula'";

    if ($mysqli->query($sqlAct)) {
        header("Location: ../index.php?action=servicios");
    } else {
        echo json_encode("Error ".$sqlAct.$mysqli -> error);
    }