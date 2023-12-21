<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "universidad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }