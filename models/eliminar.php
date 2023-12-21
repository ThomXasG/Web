<?php
    include "conexion.php";

    $cedula = $_POST['est_cedula'];

    $sqlEliminar = "delete from estudiantes where est_cedula='$cedula'";

    if ($mysqli->query($sqlEliminar)) {
        echo json_encode("Se elimino");
    } else {
        echo json_encode("Error ".$sqlEliminar.$mysqli -> error);
    }