<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carta de ventas</title>
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
		<link href="jquery-ui/jquery-ui.theme.css" rel="stylesheet">
		<script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
		<script src="jquery-ui/jquery.ui.datepicker-es.js"></script>
		<script>
			$(function() {
				$.datepicker.setDefaults($.datepicker.regional['es']);
				$("#datepicker").datepicker();
			});
		</script>
	</head>
	<body>

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Utilitarios</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Carta de Venta <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Natural</a>
								</li>
								<li>
									<a href="#">Empresa</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reconocimiento de firma <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Natural</a>
								</li>
								<li>
									<a href="#">Empresa</a>
								</li>
							</ul>
						</li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<h1>Carta de venta de vehículo</h1>
			<form class="form-horizontal" role="form" method="POST" action="cartadeventaEPdf.php">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="datepicker" class="col-lg-3 control-label">Fecha</label>
							<div class="col-lg-3">
								<input type="text" id="datepicker" name="datepicker">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!--lado izquierdo-->
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Vendedor - Representante Legal</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<!--<label for="nombreV" class="col-lg-2 control-label">Nombre</label>-->
									<div class="col-lg-3">
										<select id="selectV1" name="selectV1" class="form-control">
											<option>Sr.</option>
											<option>Sra.</option>
											<option>Srta.</option>
										</select>
									</div>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="nombreV" name="nombreV" placeholder="Introduce vendedor">
									</div>
								</div>
								<div class="form-group">
									<label for="cedulaV" class="col-lg-3 control-label">Cédula</label>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="cedulaV" name="cedulaV" placeholder="Introduce cédula">
									</div>
								</div>
								<div class="form-group">
									<label for="nacionalidadV" class="col-lg-3 control-label">Nacionalidad</label>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="nacionalidadV" name="nacionalidadV" placeholder="Introduce nacionalidad">
									</div>
								</div>
								<div class="form-group">
									<label for="empresa" class="col-lg-3 control-label">Empresa</label>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="empresa" name="empresa" placeholder="Introduce empresa">
									</div>
								</div>
																
								

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Comprador</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<!--<label for="nombreC" class="col-lg-3 control-label">Nombre</label>-->
									<div class="col-lg-3">
										<select name="selectC1" class="form-control">
											<option>Sr.</option>
											<option>Sra.</option>
											<option>Srta.</option>
										</select>
									</div>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="nombreC" name="nombreC"  placeholder="Introduce comprador">
									</div>
								</div>
								<div class="form-group">
									<label for="cedulaC" class="col-lg-3 control-label">Cédula</label>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="cedulaC" name="cedulaC" placeholder="Introduce comprador">
									</div>
								</div>
								<div class="form-group">
									<label for="nacionalidadC" class="col-lg-3 control-label">Nacionalidad</label>
									<div class="col-lg-9">
										<input type="input" class="form-control" id="nacionalidadC"  name="nacionalidadC" placeholder="Introduce nacionalidad">
									</div>
								</div>
							</div>
						</div>

					</div>

					<!--</form>-->
					<!--Fin lado izquierdo-->
				</div>

				<div class="row">
					<!--lado derecho-->
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Información del vehículo</h3>
							</div>
							<div class="panel-body">
								<!--<form class="form-horizontal" role="form" method="POST" action="cartadeventaPdf.php">-->
								<div class="form-group">
									<label for="marca" class="col-lg-2 control-label">Marca</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="marca" name="marca" placeholder="Introduce marca">
									</div>
								</div>

								<div class="form-group">
									<label for="modelo" class="col-lg-2 control-label">Modelo</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="modelo" name="modelo" placeholder="Introduce modelo">
									</div>
								</div>

								<div class="form-group">
									<label for="motor" class="col-lg-2 control-label">No. Motor</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="motor"  name="motor" placeholder="Introduce número motor">
									</div>
								</div>

								<div class="form-group">
									<label for="serie" class="col-lg-2 control-label">Serie</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="serie" name="serie" placeholder="Introduce serie">
									</div>
								</div>

								<div class="form-group">
									<label for="clase" class="col-lg-2 control-label">Clase</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="clase" name="clase" placeholder="Introduce clase">
									</div>
								</div>

								<div class="form-group">
									<label for="tipo" class="col-lg-2 control-label">Tipo</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="tipo" name="tipo" placeholder="Introduce tipo">
									</div>
								</div>

								<div class="form-group">
									<label for="tonelaje" class="col-lg-2 control-label">Tonelaje</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="tonelaje" name="tonelaje" placeholder="Introduce tonelaje">
									</div>
								</div>

								<div class="form-group">
									<label for="color" class="col-lg-2 control-label">Color</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="color" name="color" placeholder="Introduce color">
									</div>
								</div>

								<div class="form-group">
									<label for="asientos" class="col-lg-2 control-label">No. Asientos</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="asientos" name="asientos" placeholder="Introduce número asientos">
									</div>
								</div>

								<div class="form-group">
									<label for="puertas" class="col-lg-2 control-label">No. Puertas</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="puertas" name="puertas"placeholder="Introduce número puertas">
									</div>
								</div>

								<div class="form-group">
									<label for="servicio" class="col-lg-2 control-label">Servicio</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="servicio" name="servicio" placeholder="Introduce servicio">
									</div>
								</div>

								<div class="form-group">
									<label for="placa" class="col-lg-2 control-label">Placa</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="placa" name="placa" placeholder="Introduce placa">
									</div>
								</div>

								<div class="form-group">
									<label for="valor" class="col-lg-2 control-label">Valor</label>
									<div class="col-lg-10">
										<input type="input" class="form-control" id="valor" name="valor" placeholder="Introduce valor">
									</div>
								</div>
								<button type="submit" class="btn btn-default">
									Crear documento
								</button>
								<!--</form>-->

							</div>
						</div>
					</div>
					<!--Fin lado derecho-->

				</div>
			</form>
		</div>

	</body>
</html>