<?php
    session_start();
    $varUsuario = $_SESSION['Usuario'];
    $varRol = $_SESSION['Rol'];
    if($varUsuario == null || $varUsuario == '' &&
    $varRol == null || $varRol == ''){
        echo 'No se ha loggeado'.$_SESSION['Usuario'].$_SESSION['Rol'];
        die();
    }elseif($varRol == 'ADMINISTRADOR'){
		echo 'No cuenta con permisos de ver está página';
		die();
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Kaanbal - Administrador</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="mainmenu.html">Aprende Vocabulario</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nombre de admin<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="mod-usu.php">Administrar usuario</a></li>
							<li><a href="mod-pal.php">Administrar palabras</a></li>
							<li><a href="assets/php/logout.php">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Inicio</a></li>
			<li class="active">Administrar Palabras</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Administración de palabras</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Ingrese los datos correspondientes</h3>
							<hr>
							<form>
                                <div class="top-margin">
									<label>ID</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Palabra</label>
									<input type="text" class="form-control">
								</div>
                                <div class="top-margin">
									<label>Traducción</label>
									<input type="text" class="form-control">
								</div>
                                <div class="top-margin">
									<label>Idioma</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Tema <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Rareza <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Eliminar</button>	
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Modificar</button>	
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Registrar</button>	
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contacto</h3>
						<div class="widget-body">diegarma@hotmail.com</a><br>
								<br>
								Felipe Angeles Km. 84.5, Venta Prieta, 42083 Pachuca de Soto, Hgo.
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Siguenos</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Terminos y condiciones</h3>
						<div class="widget-body">
							<p>"Este programa es público, ajeno a cualquier partido político. Queda prohibido el uso para fines distintos a los establecidos en el programa"</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
		</div>

	</footer>	
		

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>