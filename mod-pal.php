<?php
    session_start();
    $varUsuario = $_SESSION['Usuario'];
    $varRol = $_SESSION['Rol'];
    if($varUsuario == null || $varUsuario == '' &&
    $varRol == null || $varRol == ''){
        echo 'No se ha loggeado'.$_SESSION['Usuario'].$_SESSION['Rol'];
        die();
    }elseif($varRol != 'ADMINISTRADOR'){
		echo 'No cuenta con permisos de ver está página '.$varRol;
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
					<li><a href="mainmenu.php">Aprende Vocabulario</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $varUsuario ?><b class="caret"></b></a>
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
							<script>
								var Id = document.getElementById('id');
								var Palabra = document.getElementById('palabra');
								var Traduccion = document.getElementById('traduccion');
								var Idioma = document.getElementById('idioma');
								var Tema = document.getElementById('tema');
								var Rareza = document.getElementById('rareza');
								const myForm = document.getElementById('myForm');

								myForm.addEventListener("submit", (e) =>
								{
 								   e.preventDefault();
								});
								function insertar(){
    								$.ajax({
        							type: 'GET',
      								url: `http://kaanbal.azurewebsites.net/Conexion.asmx/insPalabra?palabra=${Palabra.value}&traduccion=${Traduccion.value}&rareza=${Rareza.value}&idioma=${Idioma.value}&tema=${Tema.value}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Registro exitoso!");
            break;
            case '-1':
                alert("El tema no existe");
            break;
            case '0':
                alert("La palabra ya existe");
            break;
            default: 
            alert("Inserción incorrecta, verifique los datos ingresados");
        }
        console.log($(data).find('Bandera').text());
    }) 
}

function modificar(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/updPalabra?id=${Id.value}&palabra=${Palabra.value}&traduccion=${Traduccion.value}&rareza=${Rareza.value}&idioma=${Idioma.value}&tema=${Tema.value}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Modificación exitosa!");
            break;
            case '-1':
                alert("El tema no existe");
            break;
            case '0':
                alert("La palabra ya existe");
            break;
            default: 
            alert("Modificación incorrecta, verifique los datos ingresados");
        }
        console.log($(data).find('Bandera').text());
    }) 
}

function eliminar(){
    $.ajax({
        type: 'GET',
        url: `http://kaanbal.azurewebsites.net/Conexion.asmx/DelPalabra?id=${Id}`,
        dataType: 'xml'
    }).done((data) => {
        switch($(data).find('Bandera').text()) {
            case '1':
                alert("¡Eliminación exitosa!");
            break;
            case '-1':
                alert("La clave no existe");
            break;
            default: 
            alert("Eliminación incorrecta, verifique los datos ingresados");
        }
        console.log($(data).find('Bandera').text());
    }) 
}
</script>
							<form id="myForm">
                                <div class="top-margin">
									<label for="id">ID</label>
									<input type="text" id="id" class="form-control">
								</div>
								<div class="top-margin">
									<label for="palabra">Palabra</label>
									<input type="text" id="palabra" class="form-control">
								</div>
                                <div class="top-margin">
									<label for="traduccion">Traducción</label>
									<input type="text" id="traduccion" class="form-control">
								</div>
                                <div class="top-margin">
									<label for="idioma">Idioma</label>
									<input type="text" id="idioma" class="form-control">
								</div>
								<div class="top-margin">
									<label for="tema">Tema </label>
									<input type="text" id="tema" class="form-control">
								</div>
								<div class="top-margin">
									<label for="rareza">Rareza</label>
									<input type="text" id="rareza" class="form-control">
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" id="eliminar" type="submit" onclick="javascript:eliminar();">Eliminar</button>	
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" id="modificar" type="submit" onclick="javascript:modificar();">Modificar</button>	
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" id="registrar" type="submit" onclick="javascript:insertar();">Registrar</button>	
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
						johanmg902@gmail.com</a><br>
						ariadna.phdez@gmail.com</a><br>
						brayanhdzlpz2000@gmail.com</a><br>
						
								<br>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Siguenos</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://twitter.com/Brayanhl17"><i class="fa fa-twitter fa-2"></i></a>
								<a href="https://github.com/DiegoCalva"><i class="fa fa-github fa-2"></i></a>
								<a href="https://www.facebook.com/ariadna.perezhernandez"><i class="fa fa-facebook fa-2"></i></a>
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
	<script src="assets/js/admin-pal.js"></script>
</body>
</html>