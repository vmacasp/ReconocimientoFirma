<?php
	require('fpdf/fpdf.php');
	
	class PDF extends FPDF
	{
		// Cabecera de página
		function Header() {
		    
		    $archivo = fopen("datos.txt", "rb");
			$i = 0;

			if( $archivo == false ) {
     			echo "Error al abrir el archivo";
    		}

			while (!feof($archivo)) {
				$linea = fgets($archivo);
				list($clave[$i], $valor[$i]) = split(":", $linea);
				$i++;
			}

			fclose($archivo);

			$linea1 = "NOTARÍA ".strtoupper($valor[2])." DEL CANTÓN ".strtoupper($valor[3]);
			$linea2 = $valor[0]." ".$valor[1];

		    // Logo
		    //$this->Image('logo_pb.png',10,8,33);
		    // Arial bold 15
		    $this->SetFont('Arial','B',8);
		    // Movernos a la derecha
		    $this->Cell(80);
		    // Título
		   
		    $this->Cell(30,10,utf8_decode($linea1),0,0,'C');
			$this->Ln(4);
			$this->Cell(80);
			$this->Cell(30,10,utf8_decode($linea2),0,0,'C');
			
		    // Salto de línea
		    $this->Ln(20);
		    

		}	
					
		//Pie de página
		function Footer()
		{
			$this->SetY(-10);			
			$this->SetFont('Arial','I',8);			
			$this->Cell(0,10,utf8_decode('Página '.$this->PageNo().'/{nb}'),0,0,'C');
   		}
	}

?>