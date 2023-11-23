<?php

require_once('./fpdf.php');
require_once("C://xampp/htdocs/GYM/BD/ConexionBD.php");

class PDF extends FPDF {

    private $conexion;

    // Cabecera de página
    function Header() {
       
        $this->conexion = ConexionBD::getInstance();
        if ($this->conexion) {
            $this->Image('logo.jpeg', 259, 5, 20);
            $this->SetFont('Arial', 'B', 19);
            $this->Cell(80);
            $this->SetTextColor(0, 0, 0);
            $this->Cell(110, 15, utf8_decode('Musclehealth'), 1, 1, 'C', 0);
            $this->Ln(3);
            $this->SetTextColor(103);

            $this->Cell(180);
            $this->SetFont('Arial', 'B', 10);
            $this->Cell(59, 10, utf8_decode("Teléfono : 5634717379 "), 0, 0, '', 0);
            $this->Ln(5);

            $this->Cell(180);
            $this->SetFont('Arial', 'B', 10);
            $this->Cell(85, 10, utf8_decode("Correo : atencionservicios@musclehealth.com "), 0, 0, '', 0);
            $this->Ln(10);

            /* TITULO DE LA TABLA */
            $this->SetTextColor(228, 100, 0);
            $this->Cell(50);
            $this->SetFont('Arial', 'B', 15);
            $this->Cell(180, 10, utf8_decode("REPORTE DE USUARIOS "), 0, 1, 'C', 0);
            $this->Ln(7);

            /* CAMPOS DE LA TABLA */
            $this->SetFillColor(26, 91, 230);
            $this->SetTextColor(255, 255, 255);
            $this->SetDrawColor(163, 163, 163);
            $this->SetFont('Arial', 'B', 11);

           
            $this->Cell(10, 10, utf8_decode('ID'), 1, 0, 'C', 1);
            $this->Cell(20, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
            $this->Cell(30, 10, utf8_decode('Apellido'), 1, 0, 'C', 1);
            $this->Cell(80, 10, utf8_decode('Correo'), 1, 0, 'C', 1);
            $this->Cell(10, 10, utf8_decode('Edad'), 1, 0, 'C', 1);
            $this->Cell(30, 10, utf8_decode('Celular'), 1, 0, 'C', 1);
            $this->Cell(60, 10, utf8_decode('Plan'), 1, 1, 'C', 1);
            
            
        } else {
            die("Error: Unable to establish a database connection.");
        }
    }

    // Pie de página
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $hoy = date('d/m/Y');
        $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage("landscape");
$pdf->AliasNbPages();

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163);

$conexion = ConexionBD::getInstance();
if (!$conexion) {
    die("Error: Unable to establish a database connection.");
}

//$consulta_reporte_usuarios = $conexion->getConnection()->prepare("SELECT primernombre, primerapellido, correo, edad, celular FROM tbl_usuarios");
$consulta_reporte_usuarios = $conexion->getConnection()->prepare("
    SELECT u.primernombre, u.primerapellido, u.correo, u.edad, u.celular, p.nombredelplan
    FROM tbl_usuarios u INNER JOIN tbl_planes p ON u.idplan = p.id");


if ($consulta_reporte_usuarios) {
    $consulta_reporte_usuarios->execute();

    while ($datos_reporte = $consulta_reporte_usuarios->fetch(PDO::FETCH_ASSOC)) {
        $i = $i + 1;

        $pdf->Cell(10, 10, utf8_decode($i), 1, 0, 'C', 0);
        $pdf->Cell(20, 10, utf8_decode($datos_reporte['primernombre']), 1, 0, 'C', 0);
        $pdf->Cell(30, 10, utf8_decode($datos_reporte['primerapellido']), 1, 0, 'C', 0);
        $pdf->Cell(80, 10, utf8_decode($datos_reporte['correo']), 1, 0, 'C', 0);
        $pdf->Cell(10, 10, utf8_decode($datos_reporte['edad']), 1, 0, 'C', 0);
        $pdf->Cell(30, 10, utf8_decode($datos_reporte['celular']), 1, 0, 'C', 0);
        $pdf->Cell(60, 10, utf8_decode($datos_reporte["nombredelplan"]), 1, 1, 'C', 0);
    }
} else {
    die("Error: Unable to prepare the statement.");
}

$pdf->Output('ReporteUsuarios.pdf', 'I');

?>

