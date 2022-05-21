<?php
    session_start();
    $varUsuario = $_SESSION['Usuario'];
    $varRol = $_SESSION['Rol'];
    if($varUsuario == null || $varUsuario == '' &&
    $varRol == null || $varRol == ''){
        echo 'No se ha loggeado'.$_SESSION['Usuario'].$_SESSION['Rol'];
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
	
	<title>Kaanbal Vocabulary</title>

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

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button title="nav" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Inicio</a></li>
					<li class="active"><a href="mainmenu.html">Aprende vocabulario</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $varUsuario ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Estadisticas</a></li>
							<li><a href="sidebar-right.html">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<main id="head">
		<div class="container">
			<h1 class="lead">Selección Múltiple</h1>
			<div class="wrapper2">
				<button class="btnes fourth">Computación</button>
				<button class="btnes fourth">Botánica</button>
				<button class="btnes fourth">Astrología</button>
				<button class="btnes fourth">Escuela</button>
				<button class="btnes fourth">Hogar</button>
				<button class="btnes fourth">Clima</button>
			</div>
				<!-- <h2 class="lead">FAVORITOS</h2>
				<div class="wrapper2">
					<button class="btnes fourth">tema 1</button>
					<button class="btnes fourth">TEMA 2</button>
					<button class="btnes fourth">TEMA 3</button>
				</div> -->
		</div>
		<div class="container">
			<h1 class="lead">Traducción</h1>
			<div class="wrapper2">
				<button class="btnes fourth">Computación</button>
				<button class="btnes fourth">Botánica</button>
				<button class="btnes fourth">Astrología</button>
				<button class="btnes fourth">Escuela</button>
				<button class="btnes fourth">Hogar</button>
				<button class="btnes fourth">Clima</button>
			</div>
				<!-- <h2 class="lead">FAVORITOS</h2>
				<div class="wrapper2">
					<button class="btnes fourth">tema 1</button>
					<button class="btnes fourth">TEMA 2</button>
					<button class="btnes fourth">TEMA 3</button>
				</div> -->
		</div>
		<div class="container">
			<h1 class="lead">Expresiones</h1>
			<div class="wrapper2">
				<div></div>
				<button class="btnes fourth">¡Jugar!</button>
				
			</div>
				<!-- <h2 class="lead">FAVORITOS</h2>
				<div class="wrapper2">
					<button class="btnes fourth">tema 1</button>
					<button class="btnes fourth">TEMA 2</button>
					<button class="btnes fourth">TEMA 3</button>
				</div> -->
		</div>
	</main>
	<!-- /Header -->

	<!-- /Highlights -->

	<footer id="footer" >

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
								<a href="" title="twitter"><i class="fa fa-twitter fa-2"></i></a>
								<a href="" title="nose"><i class="fa fa-dribbble fa-2"></i></a>
								<a href="" title="github"><i class="fa fa-github fa-2"></i></a>
								<a href="" title="facebook"><i class="fa fa-facebook fa-2"></i></a>
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