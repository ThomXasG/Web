<?php
    include_once 'conexion.php';

    $cedula = $_POST['cedula'];

    $sql = "SELECT * FROM estudiantes WHERE est_cedula='$cedula'";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        session_start();

        // Guardar $cedula en la sesión
        $_SESSION['cedula'] = $cedula;

        // Redirigir a la página de informe
        header("Location: ../views/interfaces/indReporte.php");
        exit();
    } else {
        header("Location: ../index.php?action=servicios&error=1");
    }