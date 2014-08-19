<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	
	
	<title>AESIA</title>

	<link rel="shortcut icon" href="<?= base_url()?>public/images/gt_favicon.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?= base_url()?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>public/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>public/css/bootstrap.css">


	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?= base_url()?>public/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?= base_url()?>public/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="<?= base_url()?>public/js/html5shiv.js"></script>
	<script src="<?= base_url()?>public/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html">AESIA</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="about.html">¿Quienes Somos?</a></li>
					<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mas<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Proyectos</a></li>
							<li class="active"><a href="sidebar-right.html">Comites</a></li>
<li class="active"><a href="sidebar-right.html">Comunidades</a></li>
<li class="active"><a href="sidebar-right.html">Galeria</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contacto</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header >
	
            <!--Slider-->
            <section id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?= base_url()?>public/images/cali.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="<?= base_url()?>public/images/2.jpg" class="adaptar">
                    </div>
                    <div class="item">
                        <img src="<?= base_url()?>public/images/mac.jpg" class="adaptar">
                      
                    </div>
                </div>

                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-arrow-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"> <span class="glyphicon glyphicon-arrow-right"></span></a>
           </section>	

			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->

	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Asociacion de Estudiantes de Ingenieria y Arquitectura</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4></h4></div>
					<div class="h-body text-center">
						<p></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4>Misión</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4>Visión</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4></h4></div>
					<div class="h-body text-center">
						<p></p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">¿Que hace la Asociacion?</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Nuestra funcion en la Universidad</h3>
				<p>algun texto de explicacion<a href="#">funcion</a>lalalalalla</p>
			</div>
			<div class="col-sm-6">
				<h3>COmo ayudamos a los estudiantes</h3>
				<p>
					Texto descritivo
<a href="#">leer mas</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Como formar parte de la Asociacion</h3>
				<p>
					 
				Texto descritivo 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Proyectos y comites</h3>
				<p>texto descriptivo.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Ir a Blog »</a></p>
  		</div>

</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contacto</h3>
						<div class="widget-body">
							<p>Numero de tel <br>
								<a href="mailto:#">aesia@ejemplo.com</a><br>
								<br>
								Santa Ana, EL salvador
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Siguenos</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								

								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Texto Alternativo</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Asociacion de Ingenieria y Arquitectura @AESIA.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>public/js/headroom.min.js"></script>
	<script src="<?= base_url()?>public/js/jQuery.headroom.min.js"></script>
	<script src="<?= base_url()?>public/js/template.js"></script>
 <script src="<?= base_url()?>public/js/bootstrap.js"></script>

</body>
</html>