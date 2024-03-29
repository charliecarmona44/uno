
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/Imagen1.png" type="image/png">
        <title>Contacto</title>
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
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">

                        <a class="navbar-brand logo_h" href="index.html"><img src="img/Imagen1.png" width="125" height="125" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item "><a class="nav-link" href="{{ url('/index') }}">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="about-us.html">Informacion</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Prototipos</a>
                                        <li class="nav-item"><a class="nav-link" href="project-details.html">Proyectos en 3D</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="Fomulario.php">Registros</a></li>
                                <li class="nav-item active ">
                                    <a class="nav-link" href="contact.html">Contacto</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="#"></a></li>
                                    </ul>
                                </li>

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
						<div class="banner_content text-center">
							<h2>CONTACTO</h2>
							<div class="page_link">
								<a href="index.html">Inicio</a>
								<a href="contact.html">Contacto</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>

        <section class="contact_area p_120">
            <div class="container">

                <div class="mapBox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59952.641702518005!2d-98.75189738486698!3d20.09061025043242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x554b3e045387e34c!2sTapai+Coworking!5e0!3m2!1ses-419!2smx!4v1563331666917!5m2!1ses-419!2smx" width="1100" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div><br><br><br><br>

                <div class="row">
                    <div class="col-lg-3">

                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Pachuca de Soto, Hidalgo</h6>
                                <p>Blvrd Luis Donaldo Colosio 721, Valle de San Javier, 42086</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">01 771 376 0054</a></h6>
                                <p>
                                    jueves	9:00–20:00
                                    viernes	9:00–20:00
                                    sábado	11:00–18:00
                                    domingo	Cerrado
                                    lunes	9:00–20:00
                                    martes	9:00–20:00
                                    miércoles	9:00–20:00
                                    </p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#"> brazosfirmesac@gmail.com</a></h6>
                                <p>Envíenos un correo en cualquier momento!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese Correo Electronico">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Ingrese el Asunto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Ingrese Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer_area">
            <div class="container">
                <div class="row footer_inner">
                    <div class="col-lg-4 ">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>"Manos que Impulsan"</h3>
                            </div>
                            <p>Se parte de este equipo de Dearrollo Humano!
                                Cada vez mas personas son Beneficiadas!</p>
                            <p>© 2019 La informacion publicada en este sitio es propiedad intelectual de Fundacion Brazos Firmes.</p>
                        </aside>
                    </div>
                    <div class="col-lg-4 ">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>"Tu Puedes Donar!"</h3>
                            </div>
                            <p>
                                Somos una organizacion que realiza sus actividades mediante la gestion de recursos publicos y privados, funcionando tambien con la aportacion de nuestros integrantes!
                                Estamos muy agradecidos con todos nuestros patrocinadores, tu tambien puedes se parte de ellos!
                                Pregunta como en: brazosfirmesac@gmail.com
                            </p>
                        </aside>
                    </div>
                    <div class="col-lg-4">
                        <aside class="f_widget social_widget">
                            <div class="f_title">
                                <h3>Redes Sociales</h3>
                            </div>
                            <p>Siguenos En Redes Sociales</p>
                            <ul class="list">
                                <li><a href="https://www.facebook.com/brazosfirmes/"><i class="fa fa-facebook" width="180" height="180"></i></a></li>
                                <li><a href="https://www.instagram.com/fundacionbrazosfirmes/?hl=es-la"><i class="fa fa-instagram" width="180" height="180"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCj7fOi5HIrTHTy8oqRYArrQ"><i class="fa fa-youtube" width="180" height="180"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>


        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Muchas Gracias</h2>
                        <p>Su mensaje fue enviado exitosamente</p>
                    </div>
                </div>
            </div>
        </div>



        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Ups! Su mensaje no fue enviado</h2>
                        <p> Algo salio Mal...Intentelo Mas Tarde!

                        </p>
                    </div>
                </div>
            </div>
        </div>




        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>