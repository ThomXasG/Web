<?php
    session_start();
    
    require_once ('../../fpdf186/fpdf.php');
    require_once ('../../models/conexion.php');

    $cedula = isset($_SESSION['cedula']) ? $_SESSION['cedula'] : '';

    $sqlSelect = "SELECT * FROM estudiantes WHERE est_cedula='$cedula'";
    $result = $conn->query($sqlSelect);

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Reporte Individual de Estudiantes');
    $pdf->Ln();
    $pdf->Cell(30,10, "Cedula");
    $pdf->Cell(40,10, "Nombre");
    $pdf->Cell(40,10, "Apellido");
    $pdf->Cell(40,10, "Direccion");
    $pdf->Cell(40,10, "Telefono");

    while($row = $result->fetch_assoc()) {
        $pdf->Ln();
        $pdf->Cell(30,10, $row['est_cedula'], 1);
        $pdf->Cell(40,10, $row['est_nombre'], 1);
        $pdf->Cell(40,10, $row['est_apellido'], 1);
        $pdf->Cell(40,10, $row['est_direccion'], 1);
        $pdf->Cell(40,10, $row['est_telefono'], 1);
    }

    $pdf->Output();
?>