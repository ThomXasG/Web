<?php
    include "conexion.php";

    $sql = "SELECT * FROM estudiantes";
    $result = $conn->query($sql);

    $resultado = array();

    
