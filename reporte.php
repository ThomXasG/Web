<?php
    require ('fpdf186/fpdf.php');
    require ('models/conexion.php');

    $sqlSelect = "SELECT * FROM estudiantes";
    $result = $conn->query($sqlSelect);

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Reporte de Estudiantes');
    $pdf->Ln();
    $pdf->Cell(30,10, "Cedula", 1);
    $pdf->Cell(40,10, "Nombre", 1);

    while($row = $result->fetch_assoc()) {
        $pdf->Ln();
        $pdf->Cell(30,10, $row['est_cedula'], 1);
        $pdf->Cell(40,10, $row['est_nombre'], 1);

        /*
        $cedula = $row->est_cedula;
        $nombre = $row->est_nombre;
        $pdf->Cell(20,10, "Cedula", 1);
        $pdf->Cell(40,10, "Nombre", 1);
        $pdf->Ln();
        */
    }

    $pdf->Output();