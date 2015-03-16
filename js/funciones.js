$(document).ready(function() {
	
	$("#conyuge").hide();
	$("#chkConyuge").prop("checked", false);

	$("#divPartner2").hide();
	$("#chkPartner2").prop("checked", false);


	$("#chkConyuge").change(function(e) {
		if ($('#chkConyuge').is(':checked')) {
			$("#conyuge").show();
		} else {
			$("#conyuge").hide();
		};
	});

	$("#chkPartner2").change(function(e) {
		if ($('#chkPartner2').is(':checked')) {
			$("#divPartner2").show();
		} else {
			$("#divPartner2").hide();
		};
	});

	$("#selectV1").change(function(){
		var mivalor = $("#selectV1").val();
		//alert (mivalor);
		$("#selStatus1 option").remove();
		if ( mivalor == "1"){ 
			$("<option value='soltero'>Soltero</option>").appendTo("#selStatus1");
			$("<option value='casado'>Casado</option>").appendTo("#selStatus1");
			$("<option value='divorciado'>Divorciado</option>").appendTo("#selStatus1");
		} else {
			$("<option value='soltera'>Soltera</option>").appendTo("#selStatus1");
			$("<option value='casada'>Casada</option>").appendTo("#selStatus1");
			$("<option value='divorciada'>Divorciada</option>").appendTo("#selStatus1");			
		}

	});

	$("#selectV2").change(function(){
		var mivalor = $("#selectV2").val();
		//alert (mivalor);
		$("#selStatus3 option").remove();
		if ( mivalor == "1"){ 
			$("<option value='soltero'>Soltero</option>").appendTo("#selStatus3");
			$("<option value='casado'>Casado</option>").appendTo("#selStatus3");
			$("<option value='divorciado'>Divorciado</option>").appendTo("#selStatus3");
		} else {
			$("<option value='soltera'>Soltera</option>").appendTo("#selStatus3");
			$("<option value='casada'>Casada</option>").appendTo("#selStatus3");
			$("<option value='divorciada'>Divorciada</option>").appendTo("#selStatus3");			
		}

	});

	$("#selectC1").change(function(){
		var mivalor = $("#selectC1").val();
		//alert (mivalor);
		$("#selStatus2 option").remove();
		if ( mivalor == "1"){ 
			$("<option value='soltero'>Soltero</option>").appendTo("#selStatus2");
			$("<option value='casado'>Casado</option>").appendTo("#selStatus2");
			$("<option value='divorciado'>Divorciado</option>").appendTo("#selStatus2");
		} else {
			$("<option value='soltera'>Soltera</option>").appendTo("#selStatus2");
			$("<option value='casada'>Casada</option>").appendTo("#selStatus2");
			$("<option value='divorciada'>Divorciada</option>").appendTo("#selStatus2");			
		}

	});

	$("#selectC2").change(function(){
		var mivalor = $("#selectC2").val();
		//alert (mivalor);
		$("#selStatus4 option").remove();
		if ( mivalor == "1"){ 
			$("<option value='soltero'>Soltero</option>").appendTo("#selStatus4");
			$("<option value='casado'>Casado</option>").appendTo("#selStatus4");
			$("<option value='divorciado'>Divorciado</option>").appendTo("#selStatus4");
		} else {
			$("<option value='1'>Soltera</option>").appendTo("#selStatus4");
			$("<option value='2'>Casada</option>").appendTo("#selStatus4");
			$("<option value='3'>Divorciada</option>").appendTo("#selStatus4");			
		}

	});







}); 