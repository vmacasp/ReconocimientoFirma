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
			<h1>Reconocimiento de firma</h1>
			<form class="form-horizontal" role="form" method="POST" action="cartadeventaPdf.php">
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
								<h3 class="panel-title">Intervinientes</h3>
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
									<div class="col-lg-12">									
									<button type="button" class="btn btn-default">Añadir</button>
									</div>
								</div>
								

							</div>
						</div>
					</div>
					
					<!--</form>-->
					<!--Fin lado izquierdo-->
				</div>

				<div class="row">					
					<div class="col-md-8">
					</div>
				</div>
			</form>
		</div>

	</body>
</html>