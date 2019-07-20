<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/Imagen1.png"  type="image/png">
        <title>Brazos Firmes</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>


        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img/Imagen1.png" width="125" height="125" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="{{ url('/index') }}">Inicio</a></li>
								<li class="nav-item"><a class="nav-link" href="about-us.html">Informacion</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="projects.html">Prototipos</a>
										<li class="nav-item"><a class="nav-link" href="project-details.html">Proyectos en 3D</a></li>
									</ul>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campañas</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#"></a></li>
									</ul>
								</li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estadisticas</a>
								</li>
								<li class="nav-item submenu dropdown">
									<a class="nav-link" href="{{ url('/contacto') }}" >Contacto</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#"></a></li>
									</ul>
								</li>
								<form class="form-inline my-2 my-lg-0">


                                   <div class="navbar navbar-expand-lg navbar-dark">
                                   @if (Route::has('login'))
                                   <div class="top-right links">
                                    @if (Auth::check())
                                   <a href="{{ url('/home') }}">Home</a>
                                   @else

                                <a  class="btn btn-danger btn-sm"  href="{{ url('/loginuser') }}" >Ingresar a mi cuenta</a>
                                <a  class="btn btn-danger btn-sm" href="{{ url('/registeruser') }}">Solicitar una protesis</a>

                                   @endif
                                    </div>
                                        @endif
                                     </form>
							</ul>
						</div>
					</div>
            	</nav>
            </div>
        </header>


        <section class="banner_area">
           	<div class="box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center" >
							<h3>"Somos Corazones que Piensan<br>
								Manos que Impulsan"</h3>
							<a class="main_btn" href="#">Explorar Prototipos 3D</a>
						</div>
					</div>
				</div>
            </div>
        </section>



        <section class="home_blog_area pad_top">
        	<div class="container">
        		<div class="home_blog_inner">
        			<div class="row h_blog_item">
        				<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/home-blog/recurso.jpeg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner left">
									<h4>Mision</h4>
									<p>Somos una asociación sin ánimo de lucro que busca contribuir a la sociedad en sus diferentes sectores, brindando ayuda a personas en situaciones vulnerables,
										a través de proyectos innovadores y la aplicación de tecnología para mejorar su calidad de vida.</p>
								</div>
							</div>
						</div>
        			</div>
        			<div class="row h_blog_item">
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner right">
									<h4>Nuestro Proyecto</h4>
									<p>Somos una Agrupación sin ánimo de lucro conformada por jóvenes profesionistas, cuyo objeto es desarrollar acciones y proyectos de beneficio social, los cuales tengan como beneficiarios
										en todas y cada una de sus actividades a personas, sectores y regiones de escasos recursos.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/home-blog/brayan.jpeg" alt="">
							</div>
						</div>
        			</div>
        			<div class="row h_blog_item">
        				<div class="col-lg-6">
							<div class="h_blog_img">
								<img class="img-fluid" src="img/home-blog/convivencia.jpeg" alt="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="h_blog_text">
								<div class="h_blog_text_inner left">
									<h4>3D para todos</h4>
									<p>En Fundación Brazos Firmes somos conscientes de las brechas existentes ocasionadas por la marginación social,lo que impide el conocimiento y acceso a las nuevas tecnologías, por eso hemos
									  creado este proyecto que consta de dos etapas que permitan a cualquier persona tener cercanía con el 3D. <a href="#">Leer más</a></p>

								</div>
							</div>
						</div>
        			</div>
				</div>
			</div>
		</section>


        <footer class="footer_area">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 ">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>"Manos que Impulsan"</h3>
        					</div>
        					<p>Se parte de este equipo de Dearrollo Humano!
								Cada vez mas personas son Beneficiadas!</p>
        					<p>© 2019 La informacion publicada en este sitio es propiedad intelectual de Fundacion Brazos Firmes.</p>
        				</aside>
        			</div>
        			<div class="col-lg-5">
						<aside class="f_widget social_widget">
							<div class="f_title">
								<h3>Redes Sociales</h3>
							</div>
							<p>Siguenos En Redes Sociales</p>
							<ul class="list">


                                 <a href="https://www.youtube.com/channel/UCj7fOi5HIrTHTy8oqRYArrQ">
                                  <img src="img/redes/youtube.png" width="100" height="140">
                                 </a>


                                 <a href="https://www.facebook.com/brazosfirmes/">
                                  <img src="img/redes/facebook.png" width="100" height="100">
                                 </a>


                                 <a href="https://www.instagram.com/fundacionbrazosfirmes/">
                                  <img src="img/redes/instagram.png" width="100" height="100">
                                 </a>



							</ul>
						</aside>
        			</div>
        		</div>
        	</div>
        </footer>






        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>