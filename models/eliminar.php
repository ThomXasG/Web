<?php
    include "conexion.php";

    $cedula = $_POST['est_cedula'];

    $sqlEliminar = "delete from estudiantes where est_cedula='$cedula'";

    if ($mysqli->query($sqlEliminar)) {
        header("Location: ../index.php?action=servicios");
    } else {
        echo json_encode("Error ".$sqlEliminar.$mysqli -> error);
    }