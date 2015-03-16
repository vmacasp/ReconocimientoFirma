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
		<script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
		<script src="jquery-ui/jquery.ui.datepicker-es.js"></script>
		<link href="jquery-ui/jquery-ui.css" rel="stylesheet">
		<script>
			$(function() {
				$.datepicker.setDefaults($.datepicker.regional['es']);
				$("#datepicker-1").datepicker();
				$("#datepicker-2").datepicker();
			});
		</script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">NTD</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Carta de Venta <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="#">Persona natural</a>
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
										<a href="#">Persona natural</a>
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
		</header>
		<!--breadcrum-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li>
							Carta de venta
						</li>
						<li class="active">
							Persona natural
						</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container breadcrum -->

		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-12 col-lg-12">
					<form class="form-horizontal" role="form" method="POST" action="cartadeventaPdf.php">
						<div role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#date" aria-controls="date" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Fechas</a>
								</li>
								<li role="presentation">
									<a href="#participants" aria-controls="participants" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Intervinientes</a>
								</li>
								<li role="presentation">
									<a href="#features" aria-controls="features" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Caracteristicas</a>
								</li>
								<li role="presentation" class="pull-right">
									<button type="submit" class="btn btn-primary">
										<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Crear documento
									</button>
								</li>							
							</ul>
							<!-- Tab panes -->														
							<div class="tab-content">
								<!-- Tab dates -->
								<div role="tabpanel" class="tab-pane fade in active" id="date">
									<div class="container">
										<div class="row">
											<div class="col-lg-4">
												<p></p>
												<div class="form-group">
													<label for="datepicker-1" class="col-lg-3 control-label">Documento</label>
													<div class="col-lg-5">
														<input type="text" class="form-control" id="datepicker-1" name="datepicker-1" placeholder="click para fecha">
													</div>
												</div>
												<div class="form-group">
													<label for="datepicker-2" class="col-lg-3 control-label">Diligencia</label>
													<div class="col-lg-5">
														<input type="text" class="form-control" id="datepicker-2" name="datepicker-2" placeholder="click para fecha">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--panel participants-->
								<div role="tabpanel" class="tab-pane fade" id="participants">
									<div class="container">
										<div class="row">
											<div class="col-lg-6">
												<p></p>
												<div class="panel panel-default">
													<div class="panel-body">
														<span class="label label-default">Vendedor</span>
														<hr>
														<!--<div class="btn-group" role="group" aria-label="...">
  															<button type="button" class="btn btn-default">Natural</button>
  															<button type="button" class="btn btn-default">Empresa</button>
														</div>-->
														<div class="form-group">
															<div class="col-lg-3">
																<select id="selectV1" name="selectV1" class="form-control">
																	<option value="1">Sr.</option>
																	<option value="2">Sra.</option>
																	<option value="3">Srta.</option>
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
															<label for="selStatus1" class="col-lg-3 control-label">Estado civil</label>
															<div class="col-lg-9">
																<select name="selStatus1" id="selStatus1" class="form-control">
																	<option value="soltero">Soltero</option>
																	<option value="casado">Casado</option>
																	<option value="divorciado">Divorciado</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="nacionalidadV" class="col-lg-3 control-label">Nacionalidad</label>
															<div class="col-lg-9">
																<input type="input" class="form-control" id="nacionalidadV" name="nacionalidadV" placeholder="Introduce nacionalidad">
															</div>
														</div>
														<!--Si tiene conyuge-->
														<div class="checkbox">
															<label>
																<input type="checkbox" id="chkConyuge" name="chkConyuge" value="1">Cónyuge
															</label>
														</div>
														<div id="conyuge">
															<div class="form-group">
																<div class="col-lg-3">
																	<select id="selectV2" name="selectV2" class="form-control">
																		<option value="1">Sr.</option>
																		<option value="2">Sra.</option>
																	</select>
																</div>
																<div class="col-lg-9">
																	<input type="input" class="form-control" id="nombreV2" name="nombreV2" placeholder="Introduce vendedor">
																</div>
															</div>
															<div class="form-group">
																<label for="cedulaV2" class="col-lg-3 control-label">Cédula</label>
																<div class="col-lg-9">
																	<input type="input" class="form-control" id="cedulaV2" name="cedulaV2" placeholder="Introduce cédula">
																</div>
															</div>
															<div class="form-group">
																<label for="selStatus3" class="col-lg-3 control-label">Estado civil</label>
																<div class="col-lg-9">
																	<select name="selStatus3" id="selStatus3" class="form-control">
																		<option value="soltero">Soltero</option>
																		<option value="casado">Casado</option>
																		<option value="divorciado">Divorciado</option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label for="nacionalidadV2" class="col-lg-3 control-label">Nacionalidad </label>
																<div class="col-lg-9">
																	<input type="input" class="form-control" id="nacionalidadV2" name="nacionalidadV2" placeholder="Introduce nacionalidad">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<p></p>
												<div class="panel panel-default">													
													<div class="panel-body">
														<span class="label label-default">Comprador</span>
														<hr>
														<div class="form-group">
															<div class="col-lg-3">
																<select name="selectC1" id="selectC1" class="form-control">
																	<option  value="1">Sr.</option>
																	<option value="2">Sra.</option>
																	<option value="3">Srta.</option>
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
															<label for="selStatus2" class="col-lg-3 control-label">Estado civil</label>
															<div class="col-lg-9">
																<select name="selStatus2" id="selStatus2" class="form-control">
																	<option value="soltero">Soltero</option>
																	<option value="casado">Casado</option>
																	<option value="divorciado">Divorciado</option>
																</select>
															</div>
														</div>
														<div class="form-group">
															<label for="nacionalidadC" class="col-lg-3 control-label">Nacionalidad</label>
															<div class="col-lg-9">
																<input type="input" class="form-control" id="nacionalidadC"  name="nacionalidadC" placeholder="Introduce nacionalidad">
															</div>
														</div>
														<!--Si tiene conyuge-->
														<div class="checkbox">
															<label>
																<input type="checkbox" id="chkPartner2" name="chkPartner2" value="1">
																Cónyuge</label>
														</div>
														<div id="divPartner2">
															<div class="form-group">
																<div class="col-lg-3">
																	<select id="selectC2" name="selectC2" class="form-control">
																		<option value="1">Sr.</option>
																		<option value="2">Sra.</option>
																	</select>
																</div>
																<div class="col-lg-9">
																	<input type="input" class="form-control" id="nombreC2" name="nombreC2" placeholder="Introduce vendedor">
																</div>
															</div>
															<div class="form-group">
																<label for="cedulaC2" class="col-lg-3 control-label">Cédula</label>
																<div class="col-lg-9">
																	<input type="input" class="form-control" id="cedulaC2" name="cedulaC2" placeholder="Introduce cédula">
																</div>
															</div>
															<div class="form-group">
																<label for="selStatus4" class="col-lg-3 control-label">Estado civil</label>
																<div class="col-lg-9">
																	<select name="selStatus4" id="selStatus4" class="form-control">
																		<option value="soltero">Soltero</option>
																		<option value="casado">Casado</option>
																		<option value="divorciado">Divorciado</option>
																	</select>
																</div>
															</div>

															<div class="form-group">
																<label for="nacionalidadC2" class="col-lg-3 control-label">Nacionalidad</label>
																<div class="col-lg-9">
																	<input type="input" class="form-control" id="nacionalidadC2" name="nacionalidadC2" placeholder="Introduce nacionalidad">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!--/.panel participants-->
								<!--panel features-->
								<div role="tabpanel" class="tab-pane fade" id="features">
									<div class="container">
										<div class="row">
											<div class="col-lg-5">
												<p></p>
												<div class="form-group">													
													<label for="marca" class="col-lg-3 control-label">Marca</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="marca" name="marca" placeholder="Introduce marca">
													</div>
												</div>

												<div class="form-group">
													<label for="modelo" class="col-lg-3 control-label">Modelo</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="modelo" name="modelo" placeholder="Introduce modelo">
													</div>
												</div>

												<div class="form-group">
													<label for="motor" class="col-lg-3 control-label">Motor</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="motor"  name="motor" placeholder="Introduce número motor">
													</div>
												</div>

												<div class="form-group">
													<label for="serie" class="col-lg-3 control-label">Serie</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="serie" name="serie" placeholder="Introduce serie">
													</div>
												</div>

												<div class="form-group">
													<label for="clase" class="col-lg-3 control-label">Clase</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="clase" name="clase" placeholder="Introduce clase">
													</div>
												</div>

												<div class="form-group">
													<label for="tipo" class="col-lg-3 control-label">Tipo</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="tipo" name="tipo" placeholder="Introduce tipo">
													</div>
												</div>

												<div class="form-group">
													<label for="tonelaje" class="col-lg-3 control-label">Tonelaje</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="tonelaje" name="tonelaje" placeholder="Introduce tonelaje">
													</div>
												</div>
 
											</div>
											<div class="col-lg-5">
												<p></p>												
												<div class="form-group">
													<label for="color" class="col-lg-3 control-label">Color</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="color" name="color" placeholder="Introduce color">
													</div>
												</div>

												<div class="form-group">
													<label for="asientos" class="col-lg-3 control-label">Asientos</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="asientos" name="asientos" placeholder="Introduce número asientos">
													</div>
												</div>

												<div class="form-group">
													<label for="puertas" class="col-lg-3 control-label">Puertas</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="puertas" name="puertas"placeholder="Introduce número puertas">
													</div>
												</div>

												<div class="form-group">
													<label for="servicio" class="col-lg-3 control-label">Servicio</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="servicio" name="servicio" placeholder="Introduce servicio">
													</div>
												</div>

												<div class="form-group">
													<label for="placa" class="col-lg-3 control-label">Placa</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="placa" name="placa" placeholder="Introduce placa">
													</div>
												</div>

												<div class="form-group">
													<label for="valor" class="col-lg-3 control-label">Valor</label>
													<div class="col-lg-6">
														<input type="input" class="form-control" id="valor" name="valor" placeholder="Introduce valor">
													</div>
												</div>												
											</div>
										</div>
									</div>
								</div>
							</div><!--tab-content-->
						</div><!--tabpanel-->
					</form>
				</div>
			</div>
		</div>		
	</body>
</html>