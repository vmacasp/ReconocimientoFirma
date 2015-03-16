<?php
	require ('clases/PDF.php');
	

	$pdf = new PDF();
	$pdf -> AddPage();

	//titulo
	$title = utf8_decode("CARTA DE VENTA DE VEHÍCULO");
	$pdf->SetFont('Arial','B',15);
	$w = $pdf->GetStringWidth($title)+6;
	$pdf->SetX((210-$w)/2);
	$pdf->SetDrawColor(0);
	$pdf->SetFillColor(230);
	$pdf->SetTextColor(0);
	$pdf->SetLineWidth(1);
	$pdf->Cell($w,9,$title,1,1,'C',true);
	$pdf->Ln(10);
	
	//seteo de fuente
	$pdf -> SetFont('Arial', '', 10);
	$pdf->SetTextColor(0,0,0);
	
	// fechas	
	$fecha1 = $_POST["datepicker-1"];
	$fecha2 = $_POST["datepicker-2"];

	// vendedor
	$vendedor = strtoupper($_POST['nombreV']);
	$cedulaV = $_POST['cedulaV'];
	$ecV = $_POST['selStatus1'];
	$nacionalidadV = $_POST['nacionalidadV'];
	
	$vendedor2 = strtoupper($_POST['nombreV2']);
	$cedulaV2 = $_POST['cedulaV2'];
	$ecV2 = $_POST['selStatus3'];
	$nacionalidadV2 = $_POST['nacionalidadV2'];

	// comprador
	$comprador = strtoupper($_POST['nombreC']);
	$cedulaC = $_POST['cedulaC'];
	$ecC = $_POST['selStatus2'];
	$nacionalidadC = $_POST['nacionalidadC'];
	
	$comprador2 = strtoupper($_POST['nombreC2']);
	$cedulaC2 = $_POST['cedulaC2'];
	$ecC2 = $_POST['selStatus4'];
	$nacionalidadC2 = $_POST['nacionalidadC2'];
	
	// ayudas de genero
	$generoC = "";
	$generoV = "";
	$comboC = $_POST["selectC1"];

	if ($_POST["selectC1"] == "1") {
		$generoC = "el señor";		
	} elseif ($_POST["selectC1"] == "2") {
		$generoC = "la señora";
	} else {
		$generoC = "la señorita";
	};

	// datos.txt
	$archivo = fopen("datos.txt", "rb");
	$i = 0;

	if( $archivo == false ) {
    	echo "Error al abrir el archivo";
    };

	while (!feof($archivo)) {
		$linea = fgets($archivo);
		list($clave[$i], $valor[$i] ) = split(":", $linea);
		$i++;
	};

	fclose($archivo);
	
	// eleccion de intervinientes
	if( isset($_POST['chkConyuge']) and isset($_POST["chkPartner2"]) ){
		// vendedor y comprador con conyuge
		$chkConyuge = $_POST['chkConyuge'];
		$chkPartner2 = $_POST["chkPartner2"];
		$primerParrafo = "Nosotros, ".$vendedor." con cédula de ciudadanía No. ". $cedulaV. " y ". $vendedor2." con cédula de ciuadadanía No. ".$cedulaV2.", por medio de la presente dejamos constancia que damos en venta un vehículo de nuestra propiedad, a los señores ".$comprador." con cédula de ciudadanía No. ". $cedulaC. " y ".$comprador2." con cédula de ciudadanía No. ".$cedulaC2.". Vehículo cuyas características se describe a continuación:";
	} elseif ( isset($_POST['chkConyuge'])){
		// vendedor con conyuge
		$chkConyuge = $_POST['chkConyuge'];
		$primerParrafo = "Nosotros, ".$vendedor." con cédula de ciudadanía No. ". $cedulaV. " y ". $vendedor2." con cédula de ciuadadanía No. ".$cedulaV2.", por medio de la presente dejamos constancia que damos en venta un vehículo de nuestra propiedad, a ". $generoC." ".$comprador." con cédula de ciudadanía No. ".$cedulaC.". Vehículo cuyas características se describe a continuación:";
		
	} elseif (isset($_POST['chkPartner2'])) {
		// comprador con conyuge
		$chkPartner2 = $_POST['chkPartner2'];
		$primerParrafo = "Yo, ".$vendedor." con cédula de ciudadanía No. ". $cedulaV. ", por medio de la presente dejo constancia que doy en venta un vehículo de mi propiedad, a los señores ".$comprador." con cédula de ciudadanía No. ". $cedulaC. " y ".$comprador2." con cédula de ciudadanía No. ". $cedulaC2. ". Vehículo cuyas características se describe a continuación:";
	} else {
		// vendedor y comprador solteros
		$primerParrafo = "Yo, " . $vendedor . " con cédula de ciudadanía No. " . $cedulaV . ", por medio de la presente dejo constancia que doy en venta un vehículo de mi propiedad, a " . $generoC . " " . $comprador . " con cédula de ciudadanía No. " . $cedulaC . ". Vehículo cuyas características se describe a continuación:";	
	};
	
    // imprimir primer parrafo PDF 
	$pdf -> MultiCell(0, 5, utf8_decode($primerParrafo));
	$pdf -> ln(8);
	
	//caracteristicas del vehiculo
	// marca
	$pdf -> cell(10, 5, "Marca:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["marca"]);
	$pdf -> ln();
	
	// modelo
	$pdf -> cell(10, 5, "Modelo:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["modelo"]);
	$pdf -> ln();
	
	// numero motor
	$pdf -> cell(10, 5, "No. Motor:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["motor"]);
	$pdf -> ln();
	
	//numero serie
	$pdf -> cell(10, 5, "Serie:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["serie"]);
	$pdf -> ln();
	
	// clase
	$pdf -> cell(10, 5, "Clase:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["clase"]);
	$pdf -> ln();
	
	// tipo
	$pdf -> cell(10, 5, "Tipo:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["tipo"]);
	$pdf -> ln();
	
	// tonelaje
	$pdf -> cell(10, 5, "Tonelaje:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["tonelaje"]);
	$pdf -> ln();
	
	// color
	$pdf -> cell(10, 5, "Color:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["color"]);
	$pdf -> ln();
	
	// numero asientos
	$pdf -> cell(10, 5, "No.Asientos:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["asientos"]);
	$pdf -> ln();
	
	// numero puertas
	$pdf -> cell(10, 5, "No.Puertas:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["puertas"]);
	$pdf -> ln();
	
	// servicio
	$pdf -> cell(10, 5, "Servicio:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["servicio"]);
	$pdf -> ln();
	
	// placa
	$pdf -> cell(10, 5, "Placa:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["placa"]);
	$pdf -> ln();
	
	// valor
	$pdf -> cell(10, 5, "Valor:");
	$pdf -> setX(35);
	$pdf -> cell(10, 5, $_POST["valor"]);
	$pdf -> ln();
	$pdf -> ln();
	
	//Segundo parrafo
	$pdf -> MultiCell(0, 5, utf8_decode('En la ciudad de Durán, con fecha '.$fecha1.', para dejar constancia firmamos los interesados:'));
	$pdf -> ln(25);
	
	//firmas
	// firma vendedor
	$pdf -> cell(0, 5, $vendedor);
	$pdf -> ln();

	if ($_POST["selectV1"] == "Sr.") {
		$pdf -> cell(0, 5, "VENDEDOR");
	} else {
		$pdf -> cell(0, 5, "VENDEDORA");
	};
	$pdf -> ln();
	$pdf -> cell(0, 5, "C.C.# " . $cedulaV);
	$pdf -> ln(30);	
	
	if( isset($_POST['chkConyuge'] )){
		$pdf -> cell(0, 5, $vendedor2);
		$pdf -> ln();
		
		if ($_POST["selectV2"] == "Sr.") {
			$pdf -> cell(0, 5, "VENDEDOR");
		} else {
			$pdf -> cell(0, 5, "VENDEDORA");
		}
		$pdf -> ln();
		$pdf -> cell(0, 5, "C.C.# " . $cedulaV2);
		$pdf -> ln(30);		
	} 
	
	// firma comprador
	$pdf -> cell(0, 5, $comprador);
	$pdf -> ln();
	if ($_POST["selectC1"] == "Sr.") {
		$pdf -> cell(0, 5, "COMPRADOR");
	} else {
		$pdf -> cell(0, 5, "COMPRADORA");
	};
	$pdf -> ln();
	$pdf -> cell(0, 5, "C.C.# " . $cedulaC);
	$pdf -> ln(30);

    if( isset($_POST['chkPartner2'] )){
		$pdf -> cell(0, 5, $comprador2);
		$pdf -> ln();
		
		if ($_POST["selectC2"] == "Sr.") {
			$pdf -> cell(0, 5, "COMPRADOR");
		} else {
			$pdf -> cell(0, 5, "COMPRADORA");
		}
		$pdf -> ln();
		$pdf -> cell(0, 5, "C.C.# " . $cedulaC2);
		$pdf -> ln(30);		
	} 

	
	//Reconocimiento de firma
	$pdf -> AddPage();
	//$pdf -> SetFont('Arial', '', 14);
	//$pdf -> Cell(0, 5, 'RECONOCIMIENTO DE FIRMA');
	$pdf -> SetFont('Arial', '', 12);
	
	$titulo = trim(strtoupper($valor[0]));
	$notario = trim(strtoupper($valor[1]));
	$designacion = trim(strtoupper($valor[5]))." ".trim(strtoupper($valor[6]))." DEL CANTÓN ".trim(strtoupper($valor[3]));
	$provincia = trim(strtoupper($valor[4]));

	//Comprobar si se dio click en checkbox de conyuge 
	if ( isset($_POST['chkConyuge']) and isset($_POST['chkPartner2']) ){
		$reconocimiento = "DILIGENCIA: ".$titulo." ".$notario.", ".$designacion.", PROVINCIA DEL ".$provincia.", DE CONFORMIDAD CON EL ART.18 NUMERAL 9, DE LA LEY NOTARIAL EN VIGENCIA, CERTIFICO que las firmas y rúbricas constantes en el documento que antecede son iguales y corresponden a: ".$vendedor." con cédula de ciudadanía No. ".$cedulaV." de estado civil ".$ecV.", de nacionalidad ".$nacionalidadV."; ".$vendedor2." con cédula de ciudadanía No. ".$cedulaV2." de estado civil ".$ecV2.", de nacionalidad ".$nacionalidadV2."; ". $comprador . " con cédula de ciudadanía No. ".$cedulaC." de estado civil ".$ecC.", de nacionalidad ".$nacionalidadC."; ".$comprador2." con cédula de ciudadanía No.".$cedulaC2." de estado civil ".$ecV2.", de nacionalidad ".$nacionalidadV2.", y son las mismas que utilizan en todos sus trámites públicos y privados.- " . "Durán, " . $fecha2 . ".- El notario.-";
	} elseif ( isset($_POST['chkConyuge'] )){		
		$reconocimiento = "DILIGENCIA: ".$titulo." ".$notario.", ".$designacion.", PROVINCIA DEL ".$provincia.", DE CONFORMIDAD CON EL ART.18 NUMERAL 9, DE LA LEY NOTARIAL EN VIGENCIA, CERTIFICO que las firmas y rúbricas constantes en el documento que antecede son iguales y corresponden a: ".$vendedor." con cédula de ciudadanía No. ".$cedulaV." de estado civil ".$ecV.", de nacionalidad ".$nacionalidadV."; ".$vendedor2." con cédula de ciudadanía No. ".$cedulaV2." de estado civil ".$ecV2.", de nacionalidad ".$nacionalidadV2."; ". $comprador . " con cédula de ciudadanía No. ".$cedulaC." de estado civil ".$ecC.", de nacionalidad " . $nacionalidadC . ", y son las mismas que utilizan en todos sus trámites públicos y privados.- " . "Durán, " . $fecha2 . ".- El notario.-";
	} elseif ( isset($_POST['chkPartner2']) ) {
		$reconocimiento = "DILIGENCIA: ".$titulo." ".$notario.", ".$designacion.", PROVINCIA DEL ".$provincia.", DE CONFORMIDAD CON EL ART.18 NUMERAL 9, DE LA LEY NOTARIAL EN VIGENCIA, CERTIFICO que las firmas y rúbricas constantes en el documento que antecede son iguales y corresponden a: ".$vendedor." con cédula de ciudadanía No. ".$cedulaV." de estado civil ".$ecV.", de nacionalidad ".$nacionalidadV."; ". $comprador . " con cédula de ciudadanía No. ".$cedulaC." de estado civil ".$ecC.", de nacionalidad ".$nacionalidadC."; ".$comprador2." con cédula de ciudadanía No.".$cedulaC2." de estado civil ".$ecC2.", de nacionalidad ".$nacionalidadC2.", y son las mismas que utilizan en todos sus trámites públicos y privados.- " . "Durán, " . $fecha2 . ".- El notario.-";
	} else {
		$reconocimiento = "DILIGENCIA: ".$titulo." ".$notario.", ".$designacion.", PROVINCIA DEL ".$provincia.", DE CONFORMIDAD CON EL ART. 18 NUMERAL 9, DE LA LEY NOTARIAL EN VIGENCIA, CERTIFICO que las firmas y rúbricas constantes en el documento que antecede son iguales y corresponden a: " . $vendedor . " con cédula de ciudadanía No. ".$cedulaV." de estado civil ".$ecV.", de nacionalidad " . $nacionalidadV . "; " . $comprador . " con cédula de ciudadanía No. ".$cedulaC." de estado civil ".$ecC.", de nacionalidad " . $nacionalidadC . ", y son las mismas que utilizan en todos sus trámites públicos y privados.- " . "Durán, " . $fecha2 . ".- El notario.-";	
	}
	
	$pdf -> MultiCell(0, 5, utf8_decode($reconocimiento));
	$pdf -> AliasNbPages();
	$pdf -> Output();
?>