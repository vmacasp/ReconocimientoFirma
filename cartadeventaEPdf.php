<?php
	require ('clases/PDF.php');
	
	$pdf = new PDF();
	$pdf -> AddPage();

	//titulo
	$pdf -> SetFont('Arial', 'B', 15);
	$pdf -> cell(10, 5, utf8_decode("CARTA DE VENTA DE VEHÍCULO"));
	$pdf -> ln(8);
	
	//seteo de fuente
	$pdf -> SetFont('Arial', '', 10);
	
	//primer parrafo
	$vendedor = $_POST['nombreV'];
	$cedulaV = $_POST['cedulaV'];
	$nacionalidadV = $_POST['nacionalidadV'];
	$comprador = $_POST['nombreC'];
	$cedulaC = $_POST['cedulaC'];
	$nacionalidadC = $_POST['nacionalidadC'];
	$empresa = $_POST['empresa'];
	
	$generoC = "";
	$generoV = "";
	$comboC = $_POST["selectC1"];
	$fecha = $_POST["datepicker"];
		
	
	
	if ($_POST["selectC1"] == "Sr.") {
		$generoC = "el señor";
	} elseif ($_POST["selectC1"] == "Sra.") {
		$generoC = "la señora";
	} else {
		$generoC = "la señorita";
	}
	;
	

	$primerParrafo = "Yo, " . $vendedor . ", en calidad de Representante Legal de la compañia ".$empresa.", con cédula de ciudadanía número " . $cedulaV . ", por medio de la presente dejo constancia que doy en venta un vehículo de propiedad de la compañía, a " . $generoC . " " . $comprador . " con cédula de ciudadanía número " . $cedulaC . ". Vehículo cuyas características se describe a continuación:";	
		
	
	
	
	$pdf -> MultiCell(0, 5, utf8_decode($primerParrafo));
	$pdf -> ln(8);
	
	//caracteristicas del vehiculo
	$pdf -> cell(10, 5, "Marca:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["marca"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Modelo:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["modelo"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "No. Motor:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["motor"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Serie:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["serie"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Clase:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["clase"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Tipo:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["tipo"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Tonelaje:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["tonelaje"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Color:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["color"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "No.Asientos:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["asientos"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "No.Puertas:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["puertas"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Servicio:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["servicio"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Placa:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["placa"]);
	$pdf -> ln();
	
	$pdf -> cell(10, 5, "Valor:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["valor"]);
	$pdf -> ln();
	$pdf -> ln();
	
	//Segundo parrafo
	$pdf -> MultiCell(0, 5, utf8_decode('Para constancia firmamos los interesados:'));
	$pdf -> ln(25);
	
	//firmas
	//$pdf -> setX(20);
	$pdf -> cell(0, 5, $vendedor);
	$pdf -> ln();
	
	if ($_POST["selectV1"] == "Sr.") {
		$pdf -> cell(0, 5, "VENDEDOR");
		$pdf -> ln();
		$pdf -> cell(0, 5, "REPRESENTANTE LEGAL");
	} else {
		$pdf -> cell(0, 5, "VENDEDORA");
		$pdf -> ln();
		$pdf -> cell(0, 5, "REPRESENTANTE LEGAL");
	};
	$pdf -> ln();
	$pdf -> cell(0, 5, "C.C.# " . $cedulaV);
	$pdf -> ln(30);
	
	
	
	$pdf -> cell(0, 5, $comprador);
	$pdf -> ln();
	if ($_POST["selectC1"] == "Sr.") {
		$pdf -> cell(0, 5, "COMPRADOR");
	} else {
		$pdf -> cell(0, 5, "COMPRADORA");
	};
	$pdf -> ln();
	$pdf -> cell(0, 5, "C.C.# " . $cedulaC);
	
	//Reconocimiento de firma
	$pdf -> AddPage();
	$pdf -> SetFont('Arial', '', 14);
	$pdf -> Cell(0, 5, 'RECONOCIMIENTO DE FIRMA');
	$pdf -> ln();
	$pdf -> ln();
	
	$pdf -> SetFont('Arial', '', 12);
	
	$notario = new notario("Ernesto Xavier", "Pazos Santana", "Ab.", "M");
	$oficina = new oficina("Tercero", "Tercera", "Durán", "Guayas");
	$sexo = $notario -> obtenerSexo();
	
	$reconocimiento = "Yo, " . $notario -> obtenerTitulo() . " " . $notario -> obtenerNotario() . ", " . $oficina -> obtenerDesignacion($sexo) . ", Provincia del ". $oficina->obtenerProvincia().", República del Ecuador, de conformidad con lo prescrito en el numeral 9no, del artículo 18 de la Ley Notarial en actual vigencia DOY FE: Que las firmas y rúbricas que anteceden corresponden a las que constan en las cédulas de ciudadanía de los señores: ".$vendedor.", como REPRESENTANTE LEGAL de la compañía ".$empresa.", con cédula de ciudadanía número " . $cedulaV . " de nacionalidad " . $nacionalidadV . "; " . $comprador . " con cédula de ciudadanía número " . $cedulaC . " de nacionalidad " . $nacionalidadC . ".- " . "Durán, " . $fecha . ".- El notario.-";	
	
	
	$pdf -> MultiCell(0, 5, utf8_decode($reconocimiento));
	$pdf -> AliasNbPages();
	$pdf -> Output();
?>