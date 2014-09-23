<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">


    <title>Congreso 2013 | Congreso de Ingeniería y Arquitectura 2013</title>
    <!-- head commun -->
    <?= $this->load->view('comun/comun_head')?>
</head>

<body class="home">
    <!--menubar-->
    <?= $this->load->view('comun/menu')?>

    <!-- Header -->
    <header>

            <!--Slider-->
            <section id="miSlide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?= base_url()?>public/images/slider/1.png" class="img-responsive firstImg"/>
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= base_url()?>public/images/slider/2.png" class="img-responsive firstImg"/>
                        <div class="carousel-caption">
                            <h3>Junta directiva de AESIA</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= base_url()?>public/images/slider/3.png" class="img-responsive firstImg"/>
                        <div class="carousel-caption">
                            <h3>Nuevo Ingreso</h3>
                            <p>Bienvenida estudiantes de nuevo ingreso 2014</p>
                        </div>
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
                        <p>Somos una asociación estudiantil que promueve el desarrollo integral de los estudiantes de ingeniería y arquitectura de la
                            UES FMOcc, fortaleciendo la formación profesional competente, creando agentes de cambio comprometidos con el desarrollo del país.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4>Visión</h4></div>
                    <div class="h-body text-center">
                        <p>ser una asociación reconocida a nivel naciona por fomentar el profesionalismo, la creatividad, y la conciencia social en los
                            estudiantes, logrando así generar desarrollo y bienestar en la sociedad salvadoreña.
</p>
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

</div>  <!-- /container -->


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


                                <a href="https://www.facebook.com/AESIAFmocc"><i class="fa fa-facebook fa-2"></i></a>
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

                </div>
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

                </div>
            </div>
        </div>

    </footer>






    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>public/js/libs/headroom.min.js"></script>
    <script src="<?= base_url()?>public/js/libs/jQuery.headroom.min.js"></script>
    <script src="<?= base_url()?>public/js/template.js"></script>
    <script src="<?= base_url()?>public/js/libs/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>
    <script src="<?= base_url()?>public/js/controllers/homeSliderCtrl.js"></script>
    <script src="<?= base_url()?>public/js/homeApp.js"></script>
</body>
</html>
