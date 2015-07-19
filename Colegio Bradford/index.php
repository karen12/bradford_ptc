

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Colegio Bradford</title>		
		<!-- Meta Description -->
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="img/load.gif" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation Boton bootstrap en responsive
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo1.png" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Inicio</a></li>
                         <li><a href="#features">Características</a></li>
                         <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#team">Equipo</a> </li>
                        <li><a href="#politicas">Políticas</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <li><a href="#preguntas">Preguntas Frecuentes</a></li>
                        <li><a href="/signup">Cerrar Sesión</a></li>
                        <li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form method="post" action="login" accept-charset="UTF-8">
								<input style="margin-bottom: 15px;" type="text" placeholder="Usuario o Email" id="username" name="username" required>
								<input style="margin-bottom: 15px;" type="password" placeholder="Contraseña" id="password" name="password" required>
								<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
								<label class="string optional" for="user_remember_me"> Recordarme</label>
								<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Iniciar">
								<!--label style="text-align:center;margin-top:5px">or</label>
                                <input class="btn btn-primary btn-block" type="button" id="sign-in-facebook" value="Inicia con Facebook">
								<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Inicia conTwitter"-->
							</form>
						</div>
					</li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Ruedas indicadoras -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				</ol>

				!-- Ruedas indicadoras -->
                <?php
                /*Esta pequeña  linea quita errores molestos que muestra php*/
                error_reporting(E_ALL ^ E_NOTICE);
                require("bd.php");
                /*Se llama la libreria de paginacion la que noo tenemos!xD*/
                $sql = "SELECT * FROM noticias LIMIT 0,1";
                $data = "";
                foreach($PDO->query($sql) as $row) {
                    $data .= "<ol class='carousel-indicators'>";
                    $data .= "<li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>";
                }
                print($data);
                $sql = "SELECT * FROM noticias LIMIT 1,566";
                $sql = "SELECT COUNT(*)-1 as indicador FROM noticias ";
                $data = "";
                foreach($PDO->query($sql) as $row) {
                    $data .= "<li data-target='#carousel-example-generic' data-slide-to='$row[indicador]'></li>";
                    $data .= "</ol>";
                }
                print($data);
                ?>
				<!-- Fin de ruedas indicadoras -->
				
				<!-- Fin de ruedas indicadoras -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<!-- PHP CARROUSEL-->
                            <?php
                            /*Esta linea quita errores que muestra php*/
                            error_reporting(E_ALL ^ E_NOTICE);
                            /*Se llama la libreria de paginacion no hayxd*/
                            $sql = "SELECT banner FROM interfaz ORDER BY id_interfaz LIMIT 0,1";
                            $data = "";
                            foreach($PDO->query($sql) as $row) {
                                $data .= "<div class='item active' style='background-image:  url(../backend/Mantenimientos/$row[foto])'>";
                                $data .= "<div class='carousel-caption'>";
                                $data .= "<h2 data-wow-duration='700ms' data-wow-delay='500ms' class='wow bounceInDown animated'><span>$row[titulo] </span></h2>";
                                $data .= "<h3 data-wow-duration='1000ms' class='wow slideInLeft animated'><span class='color'>$row[subtitulo]</span></h3>";
                                $data .= "<p data-wow-duration='1000ms' class='wow slideInRight animated'>$row[leyenda]</p>";
                                $data .= "</div>";
                                $data .= "</div>";
                            }
                            print($data);
                            $sql = "SELECT titulo, subtitulo, leyenda, foto FROM noticias ORDER BY id_noticia LIMIT 1, 566";
                            $data = "";
                            foreach($PDO->query($sql) as $row) {
                                $data .= "<div class='item' style='background-image: url(../backend/Mantenimientos/$row[foto])'>";
                                $data .= "<div class='carousel-caption'>";
                                $data .= "<h2 data-wow-duration='700ms' data-wow-delay='500ms' class='wow bounceInDown animated'><span>$row[titulo] </span></h2>";
                                $data .= "<h3 data-wow-duration='1000ms' class='wow slideInLeft animated'><span class='color'>$row[subtitulo]</span></h3>";
                                $data .= "<p data-wow-duration='1000ms' class='wow slideInRight animated'>$row[leyenda]</p>";
                                $data .= "</div>";
                                $data .= "</div>";
                            }
                            print($data);
                            ?>
                            <ul class="social-links text-center">
                                <li><a href="https://twitter.com/winefunoficial" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.facebook.com/winefunofficial" target="_blank" ><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="https://instagram.com/winefun_official/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                            </ul>
                        </div>
                    <!-- PHP CARROUSEL-->
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(img/banda.jpg);">
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Conoce al Colegio<span> Bradford</span>!</h2>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">Profesionales a tu servicio</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="https://www.facebook.com/pages/Colegio-Bradford/648916798545809?fref=ts"target="_blank" ><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
					<!-- single slide -->
					<div class="item" style="background-image: url(img/actos.jpg);">
                        <div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Conoce al Colegio<span> Bradford</span>!</h2>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">Profesionales a tu servicio</p>		
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="https://www.facebook.com/pages/Colegio-Bradford/648916798545809?fref=ts"target="_blank "><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Características</h2>
						<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
					</div>



					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					 <?php
                require("../SCRUD/db.php");
                $sql = "SELECT mision_ins  FROM institucion ORDER BY id_ins DESC";
                $data = "";
                foreach($PDO->query($sql) as $row) {
                    $data .= "<div class='service-icon'>";
                    $data .= "<i class='fa fa-github fa-2x'></i>";
                    $data .= "</div>";
                    $data .= "<div class='service-desc'>";
                    $data .= "<h3>Mision</h3>";
                    $data .= "<p>$row[mision_ins]</p>";
                    $data .= "</div>";
                }
                print($data);
                $PDO = null;
            ?>
					</div>
					
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<?php
                require("../SCRUD/db.php");
                $sql = "SELECT vision_ins  FROM institucion ORDER BY id_ins DESC";
                $data = "";
                foreach($PDO->query($sql) as $row) {
                    $data .= "<div class='service-icon'>";
                    $data .= "<i class='fa fa-pencil fa-2x'></i>";
                    $data .= "</div>";
                    $data .= "<div class='service-desc'>";
                    $data .= "<h3>Vision</h3>";
                    $data .= "<p>$row[vision_ins]</p>";
                    $data .= "</div>";
                }
                print($data);
                $PDO = null;
            ?>
						
					</div>

					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
                  	<?php
                require("../SCRUD/db.php");
                $sql = "SELECT valores  FROM institucion ORDER BY id_ins DESC";
                $data = "";
                foreach($PDO->query($sql) as $row) {
                    $data .= "<div class='service-icon'>";
                    $data .= "<i class='fa fa-bullhorn fa-2x'></i>";
                    $data .= "</div>";
                    $data .= "<div class='service-desc'>";
                    $data .= "<h3>valores</h3>";
                    $data .= "<p>$row[valores]</p>";
                    $data .= "</div>";
                }
                print($data);
                $PDO = null;
            ?>

					</div>
							
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
		
        <!--
        Servicios
        ==================================== -->
		
		<section id="servicios" class="servicios">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>Servicios</h2>
						<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>Educacion desde kinder a 9no grado</p>
					</div>
					
					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="#" data-filter="*" class="current">todos</a></li>
							<li><a href="#" data-filter=".parents">Padres</a></li>
							<li><a href="#" data-filter=".band">Banda</a></li>
							<li><a href="#" data-filter=".teachers">Maestros</a></li>
							<li><a href="#" data-filter=".presidency">Presidencia</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="project-wrapper">

			
				<figure class="work-item house">
					<img src="img/works/presidenta.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/presidenta.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Presidenta electa</h4>
					</figcaption>
					</figure>
				<figure class="work-item house">
					<img src="img/works/padres.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/padres.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Escuela de Padres</h4>
					</figcaption>
					</figure>
				<figure class="work-item house">
					<img src="img/works/maestros.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/maestros.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Convivio entre maestros</h4>
					</figcaption>
				</figure>
				
				<figure class="work-item special">
					<img src="img/works/banda2.jpg" alt="">
					<figcaption class="overlay">
						<a class="fancybox" rel="works" title="Celebraciones especiales" href="img/works/banda2.jpg"><i class="fa fa-eye fa-lg"></i></a>
						<h4>Banda en Accion</h4>
					</figcaption>
				</figure>
				
			</div>
		

		</section>
		
		
        <!--
        Fin de servicios
        ==================================== -->

		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Creadores de la pagina</h2>
						<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p>En esta sección se dan a conocer los desarrolladores de está página web. </p>
					</div>


					
					<!-- Primer Miembro -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="img/team/diego.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Diego Ramirez </h5>
								<p>"Contactanos"</p>
								<ul class="social-links text-center">
									<li><a href="https://twitter.com/aces_spartan"target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://www.facebook.com/diegoalfonso.ramirez.5?fref=ts"target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Diego Ramirez</h4>
						<span>Desarrollador Web</span>
					</figure>
					<!-- Fin de primer miembro -->
					
					<!-- Segundo miembro -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/karen.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Karen Melara</h5>
								<p>"Te invitamos a solicitar nuestros servicios"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://www.facebook.com/karen.melara.5"target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Karen Melara</h4>
						<span>Desarrolladora Web</span>
					</figure>
					<!-- Fin de segundo miembro -->

					<!-- Tercer miembro -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/moi.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Moises Rosales</h5>
								<p>"Animate y contactanos"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://www.facebook.com/MoisesDanielRosalesGalindo?fref=ts"target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Moises Rosales</h4>
						<span>Desarrollador Web</span>
					</figure>
					<!-- Fin de tercer miembro -->

					<!-- Cuarto miembro -->
					<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="img/team/mashell.jpg" alt="Team Member" class="img-responsive">
							<figcaption class="overlay">
								<h5>Marshelly Torrez</h5>
								<p>"No te decepcionaremos"</p>
								<ul class="social-links text-center">
									<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a href="https://www.facebook.com/marshellytorres?fref=ts"target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
							</figcaption>
						</div>
						<h4>Marshelly Torrez</h4>
						<span>Desarrolladora Web</span>
					</figure>
					<!-- Fin de cuarto miembro -->

					

					
				</div>
			</div>
		</section>
		
        <!--
        End Meet Our Team
        ==================================== -->
		
		<!--
        Some fun facts
        ==================================== -->		
		
		<section id="politicas" class="politicas">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Políticas de Empresa</h2>
							<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
						</div>

						<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
							<h2>Políticas de Empresa</h2>
							<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
						</div>
                        
                  	<?php
                $sql = "SELECT nombre, descripcion  FROM politicas ORDER BY id_politica DESC";
                $data = "";
                foreach($PDO->query($sql) as $row) {
                    $data .= "<tr>";               	
                    $data .= "<div class='col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated' data-wow-duration='500ms'>";
                    $data .= "<div class='counters-item'>";
                    $data .= "<i class='fa fa-paypal fa-3x'></i>";
                    $data .= "<p>$row[nombre]</p>";
                    $data .= "<h5>$row[descripcion]</h5>";
                    $data .= "</div>";
                    $data .= "</div>";
                }
                print($data);
                $PDO = null;
            ?>
						
						<!-- first count item -->
				
						<!-- end first count item -->
				
					</div>
					
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
       
        Contact Us
        ==================================== -->		
		
		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Contáctanos</h2>
						<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>No dudes en contáctarnos para cualquier duda, sugerencia u opinión. Será un honor para nosotros el saber si sus espectactivas fueron satisfechas o no. De esa manera podemos mejorar nuestros servicios.</p>
					</div>
					
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>Interactúa con nosotros!</h3>
							<p>Reparto las tres magnolias  </p>
							<p>Calle 2 Casa Nº1, Mejicanos</p>
							<p>22721068</p>
						</div>
					</div>
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>Di hola!</h3>
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
									</div>
									<div class="input-field">
										<input type="email" name="email" id="email" placeholder="Email" class="form-control">
									</div>
								</div>
								<div class="input-group">
									<textarea name="message" id="message" placeholder="Mensaje" class="form-control"></textarea>
								</div>
								<div class="input-group">
									<input type="submit" id="form-submit" class="pull-right " value="Enviar Mensaje">
								</div>
							</form>
						</div>
					</div>
					<!-- end contact form -->
					
					<!-- footer social links -->
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<ul class="footer-social">
							<li><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
						</ul>
					</div>
					<!-- end footer social links -->
					
				</div>
			</div>
			
			<!-- Google map <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div>-->


				 
				<div class="google-maps">
							<iframe src=				"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1938.4267499442747!2d-89.2654591521177!3d13.666670718021175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632e38d8691fab%3A0x317bd8e9aa3ae54b!2sSanta+Elena!5e0!3m2!1ses-419!2ssv!4v1424628917466" width="1262" height="200" frameborder="0" style="border:0"></iframe>
				</div>
			<!-- End Google map -->
			
		</section>
		<!--

				<section id="registro" class="registro">
<div class="container">

<div class="row">
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Registrarse</h2>
						<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2 class="register">Registrese <small>Es gratis y siempre lo será.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Primer Nombre" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Segundo Nombre" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Nombre de Usuario" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email " tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmar Contraseña" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					 Cuando des click en <strong class="label label-primary">Registrarse</strong>, estarás de acuerdo con nuestras <a href="#politicas" class="terminos">Políticas de empresa</a> establecido por este sitio, incluyendo el uso de cookies.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div ><input type="submit" value="Registrarse" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
		</form>
	</div>
</div>
<!-- Modal >
-->
<!--
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terminos y Condiciones</h4>
                </div>
			<!--div class="modal-body">
				<p>Los métodos de pago deben de realizarse en PayPal, Depósito Bancario o Modalidad Presencial</p>
				<p>No exigimos un límite en la cantidad de invitados, tú lo decides</p>
				<p>El local lo pones tú, nosotros nos encargamos de la decoración.</p>
				<p>Nuestros servicios son exclusivamente para el territorio salvadoreño.</p>
				
			<!div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Estoy de Acuerdo</button>
			</div>
		</div><! /.modal-content >
	</div>< /.modal-dialog >
</div><! /.modal >
</div-->
		</section>
        <!--
        Din de registro
        ==================================== -->
        		        <!--Inicio Preguntas Frecuentes
        ==================================== -->
        		<section id="preguntas" class="preguntas">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Preguntas Frecuentes</h2>
						<div class="devider"><i class="fa fa-trophy fa-lg"></i></div>
					</div>
					<!--Preguntas-->
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Si tienes alguna duda, tómate unos minutos para leer las preguntas más comunes sobre WineFun</p>
					</div>
                    <div class="frecuentes" data-wow-duration="1000ms">
                       <h3 class="preg"><p>¿Cuáles son las formas de pago?</p></h3>
                        <h4 class="res"><p>Las formas de pago se pueden realizar de varias maneras. La primera es mediante PayPal, lo que hace tu transacción completamente segura al pagar con tu Tarjeta de Crédito o Débito. La segunda es por Depósito Bancario, y la tercera es por modalidad presencial con el profesional que se le asigno.</p></h4>
                    </div>
					<!--Fin de preguntass-->

					</div>
                    </div>
                    </section>
					<!-- end preguntas frecuentes -->
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
					       <h3 class="preg"><p>Colegio Bradford</p></h3>
							<p><img src="img/logo1.png" alt=""></p>
						</div>
					</div>
				
					<!--div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div-->
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" >
						<div class="footer-single">
							<h6>Menú</h6>
							<ul>
								<li><a href="#body">Inicio</a></li>
								<li><a href="#features">Características</a></li>
								<li><a href="#servicios">Servicios</a></li>
								<li><a href="#team">Equipo</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Menú</h6>
							<ul>
								<li><a href="#politicas">Políticas</a></li>
								<li><a href="#contact">Contacto</a></li>
								<li><a href="#preguntas">Preguntas Frecuentes</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.isotope -->
        <script src="js/jquery.isotope.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
        
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <!--Script de registro-->
        <script src="js/registro.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "Vamos, tienes que tener un nombre ¿O no?",
							minlength: "Tu nombre debe contener al menos dos carácteres"
						},
						email: {
							required: "Sin email no hay mensajes"
						},
						message: {
							required: "Umm, tienes que escribir algo para enviar tu email.",
							minlength: "¿Eso es todo, enserio?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>
