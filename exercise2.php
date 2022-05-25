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
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Kaanbal - Ejercicios</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/jQueryEX2.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="javascript:cargardatos();">
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
					<li><a href="mainmenu.php">Aprende vocabulario</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $varUsuario ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Estadisticas</a></li>
							<?php
							if($varRol == 'ADMINISTRADOR'){
							 	echo "<li><a href='mod-usu.php'>Administrar usuario</a></li>";
								echo "<li><a href='mod-pal.php'>Administrar palabras</a></li>";
							}
							?>
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
			<li><a href="mainmenu.php">Aprende vocabulario</a></li>
			<li class="active"><?php echo $_SESSION['Tema'];?></li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Ejercicio de Vocabulario</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default exc">
						<div class="panel-body">
							<h3 class="thin text-center">Escribe la traducción correcta</h3>
							<h2 class="thin text-center" id="pal"></h2>
						<hr>
							
							<form id="myForm">
								<div class="top-margin">
									<input type="text" class="form-control" id="trad">
								</div>
								<div class="opcb">
									<button class="btn2 btn-action" type="submit" id="but">Calificar</button>
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
	<input type="text" id="siuu" value="<?php echo $_SESSION['Tema'];?>" hidden>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>