<?php
    session_start();
    $varUsuario = $_SESSION['Usuario'];
    $varRol = $_SESSION['Rol'];
    $varCorreo = $_SESSION['Correo'];
    if($varUsuario == null || $varUsuario == '' &&
    $varRol == null || $varRol == ''){
        echo 'No se ha loggeado';
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
	
	<title>Kaanbal - Estadísticas</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/styles.css">

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
				<button title="nav" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Inicio</a></li>
					<li class="active"><a href="mainmenu.php">Aprende vocabulario</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $varUsuario ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="estadistica.php">Estadisticas</a></li>
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
			<li class="active">Estadísticas</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Estadísticas</h1>
				</header>
				
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-center image-container-large ">
                                
                            </div> <!-- end of image-container-large -->
                            <div class="text-container">
                                
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3 class="text-center">Información del usuario</h3>
                                        <hr>

                                        <!-- Estadísticas -->
                                        <div class="top-margin">
                                            <label for="nombre">Nombre:  </label>
                                            <label for="nombre"><?php echo $varUsuario ?></label>
                                        </div>
                                        
                                        <div class="top-margin">
                                            <label for="nombre">Correo:  </label>
                                            <label for="nombre"><?php echo $varCorreo?></label>
                                        </div>
                                    <!-- /Estadísticas -->
                                    </div>
                                </div>
                                <hr class="d-print-none"/>
                                
                               
                                            <div class="panel panel-default">
                                                    <div class="container "><!-- Comienza container -->
                                                        <div class="panel-body">
                                                            <h3 class="text-center">Progreso global</h3>
                                                            <hr>
                                                            <div class="cartas" class="align-content-sm-center">
                                                            <div class="card">
                                                                <div class="box">
                                                                    <div>
                                                                        <div class="percent">
                                                                            <div class="number">
                                                                                <h2 id="intentos_global">0</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text">Número de intentos</div>
                                                            </div><!-- / card -->
                                                            
                                                            <div class="card">
                                                                <div class="box">
                                                                    <div>
                                                                        <div class="percent">
                                                                            
                                                                            <div class="number">
                                                                                <h2 id="correctas_global">0</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text">Respuestas correctas</div>
                                                            </div><!-- /card -->

                                                            <!-- <div class="card">
                                                                <div class="box">
                                                                    <div>
                                                                        <div class="percent">
                                                                            <svg>
                                                                                <circle cx="100" cy="100" r="100"></circle>
                                                                                <circle cx="70" cy="70" r="0"></circle>
                                                                            </svg>
                                                                            <div class="number">
                                                                                <h2>0</h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text">Aprovechamiento</div>
                                                            </div> --><!-- /card -->

                                                        </div><!-- termina cartas -->
                                                    </div>

                                                    
                                                </div><!-- Termina container -->


                                                <div class="container "><!-- Comienza container -->
                                                    <div class="panel-body">
                                                        <h3 class="text-center">Computación</h3>
                                                        <hr>
                                                        <div class="cartas" class="align-content-sm-center">
                                                        <div class="card">
                                                            <div class="box">
                                                                <div>
                                                                    <div class="percent">
                                                                        <div class="number">
                                                                            <h2 id="computacion_intentos">0</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text">Número de intentos</div>
                                                        </div><!-- / card -->
                                                        
                                                        <div class="card">
                                                            <div class="box">
                                                                <div>
                                                                    <div class="percent">
                                                                        
                                                                        <div class="number">
                                                                            <h2 id="computacion_aciertos">0</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text">Respuestas correctas</div>
                                                        </div><!-- /card -->

                                                        <!-- <div class="card">
                                                            <div class="box">
                                                                <div>
                                                                    <div class="percent">
                                                                        <svg>
                                                                            <circle cx="70" cy="70" r="70"></circle>
                                                                            <circle cx="70" cy="70" r="70"></circle>
                                                                        </svg>
                                                                        <div class="number">
                                                                            <h2>0</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text">Aprovechamiento</div>
                                                        </div> --><!-- /card -->

                                                    </div><!-- termina cartas -->
                                                </div>

                                                
                                            </div><!-- Termina container -->
                                            
                                            <div class="container "><!-- Comienza container -->
                                                <div class="panel-body">
                                                    <h3 class="text-center">Botánica</h3>
                                                    <hr>
                                                    <div class="cartas" class="align-content-sm-center">
                                                    <div class="card">
                                                        <div class="box">
                                                            <div>
                                                                <div class="percent">
                                                                    <div class="number">
                                                                        <h2 id="botanica_intentos">0</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text">Número de intentos</div>
                                                    </div><!-- / card -->
                                                    
                                                    <div class="card">
                                                        <div class="box">
                                                            <div>
                                                                <div class="percent">
                                                                    
                                                                    <div class="number">
                                                                        <h2 id="botanica_aciertos">0</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text">Respuestas correctas</div>
                                                    </div><!-- /card -->

                                                    <!-- div class="card">
                                                        <div class="box">
                                                            <div>
                                                                <div class="percent">
                                                                    <svg>
                                                                        <circle cx="70" cy="70" r="70"></circle>
                                                                        <circle cx="70" cy="70" r="70"></circle>
                                                                    </svg>
                                                                    <div class="number">
                                                                        <h2>0</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text">Aprovechamiento</div>
                                                    </div> --><!-- /card -->

                                                </div><!-- termina cartas -->
                                            </div>

                                            
                                        </div><!-- Termina container -->

                                        <div class="container "><!-- Comienza container -->
                                            <div class="panel-body">
                                                <h3 class="text-center">Astrología</h3>
                                                <hr>
                                                <div class="cartas" class="align-content-sm-center">
                                                <div class="card">
                                                    <div class="box">
                                                        <div>
                                                            <div class="percent">
                                                                <div class="number">
                                                                    <h2 id="astrologia_intentos">0</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text">Número de intentos</div>
                                                </div><!-- / card -->
                                                
                                                <div class="card">
                                                    <div class="box">
                                                        <div>
                                                            <div class="percent">
                                                                
                                                                <div class="number">
                                                                    <h2 id="astrologia_aciertos">0</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text">Respuestas correctas</div>
                                                </div><!-- /card -->

                                                <!-- <div class="card">
                                                    <div class="box">
                                                        <div>
                                                            <div class="percent">
                                                                <svg>
                                                                    <circle cx="70" cy="70" r="70"></circle>
                                                                    <circle cx="70" cy="70" r="70"></circle>
                                                                </svg>
                                                                <div class="number">
                                                                    <h2>0</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text">Aprovechamiento</div>
                                                </div> --><!-- /card -->

                                            </div><!-- termina cartas -->
                                        </div>

                                        
                                    </div><!-- Termina container -->


                                    <div class="container "><!-- Comienza container -->
                                        <div class="panel-body">
                                            <h3 class="text-center">Escuela</h3>
                                            <hr>
                                            <div class="cartas" class="align-content-sm-center">
                                            <div class="card">
                                                <div class="box">
                                                    <div>
                                                        <div class="percent">
                                                            <div class="number">
                                                                <h2 id="escuela_intentos">0</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Número de intentos</div>
                                            </div><!-- / card -->
                                            
                                            <div class="card">
                                                <div class="box">
                                                    <div>
                                                        <div class="percent">
                                                            
                                                            <div class="number">
                                                                <h2 id="escuela_aciertos">0</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Respuestas correctas</div>
                                            </div><!-- /card -->

                                            <!-- <div class="card">
                                                <div class="box">
                                                    <div>
                                                        <div class="percent">
                                                            <svg>
                                                                <circle cx="70" cy="70" r="70"></circle>
                                                                <circle cx="70" cy="70" r="70"></circle>
                                                            </svg>
                                                            <div class="number">
                                                                <h2>0</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text">Aprovechamiento</div>
                                            </div> --><!-- /card -->

                                        </div><!-- termina cartas -->
                                    </div>

                                    
                                </div><!-- Termina container -->


                                <div class="container "><!-- Comienza container -->
                                    <div class="panel-body">
                                        <h3 class="text-center">Hogar</h3>
                                        <hr>
                                        <div class="cartas" class="align-content-sm-center">
                                        <div class="card">
                                            <div class="box">
                                                <div>
                                                    <div class="percent">
                                                        <div class="number">
                                                            <h2 id="hogar_intentos">0</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text">Número de intentos</div>
                                        </div><!-- / card -->
                                        
                                        <div class="card">
                                            <div class="box">
                                                <div>
                                                    <div class="percent">
                                                        
                                                        <div class="number">
                                                            <h2 id="hogar_aciertos">0</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text">Respuestas correctas</div>
                                        </div><!-- /card -->

                                        <!-- <div class="card">
                                            <div class="box">
                                                <div>
                                                    <div class="percent">
                                                        <svg>
                                                            <circle cx="70" cy="70" r="70"></circle>
                                                            <circle cx="70" cy="70" r="70"></circle>
                                                        </svg>
                                                        <div class="number">
                                                            <h2>0</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text">Aprovechamiento</div>
                                        </div> --><!-- /card -->

                                    </div><!-- termina cartas -->
                                </div>

                                
                            </div><!-- Termina container -->


                            <div class="container "><!-- Comienza container -->
                                <div class="panel-body">
                                    <h3 class="text-center">Clima</h3>
                                    <hr>
                                    <div class="cartas" class="align-content-sm-center">
                                    <div class="card">
                                        <div class="box">
                                            <div>
                                                <div class="percent">
                                                    <div class="number">
                                                        <h2 id="clima_intentos">0</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">Número de intentos</div>
                                    </div><!-- / card -->
                                    
                                    <div class="card">
                                        <div class="box">
                                            <div>
                                                <div class="percent">
                                                    
                                                    <div class="number">
                                                        <h2 id="clima_aciertos">0</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">Respuestas correctas</div>
                                    </div><!-- /card -->

                                    <!-- <div class="card">
                                        <div class="box">
                                            <div>
                                                <div class="percent">
                                                    <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                    </svg>
                                                    <div class="number">
                                                        <h2>0</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text">Aprovechamiento</div>
                                    </div> --><!-- /card -->

                                </div><!-- termina cartas -->
                            </div>

                            
                        </div><!-- Termina container -->

                        

                                                

                                            </div>
                                            
                                           
                                        
                                  
        
                                    
                                            
                                            
                                      
                            </div> <!-- end of text-container-->
				
				
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
    <input type="text" id="Correo" value="<?php echo $_SESSION['Correo'];?>" hidden>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
    <script src="assets/js/estadisticas.js"></script>
	
</body>
</html>