<html>
 <head>

  <title>
  Administrador
  <title>

 </head>

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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">




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

                        <a> has ingresado al sistema!</a>
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="index.html"></a></li>
								<li class="nav-item active"><a class="nav-link" href="index.html"></a></li>
								<li class="nav-item"><a class="nav-link" href="about-us.html">Informacion</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Control de administradores</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrar</a>
										<li class="nav-item"><a class="nav-link" href="project-details.html">Ver usuarios</a></li>
									</ul>
								</li>

                                <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenid@ {{ Auth::user()->name }}  </a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a href="{{ route('logout') }}"  class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">>Salir del sistema</a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
						<div class="banner_content text-center" >
							<h3>"Bienvenido Administrador"<br>
								</h3>

						</div>
					</div>
				</div>
            </div>
        </section>



                 <script src="{{ asset('js/app.js') }}"></script>
                 <script>
                 var url = document.URL;
                 history.pushState(null, null, document.URL);
                 window.addEventListener('popstate', function () {
                 history.pushState(null, null, url);
                 });
                </script>
                </div>
            </div>
        </div>
    </div>
</div>


     <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/style.js') }}"></script>
    <script>
    var url = document.URL;
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, url);
    });
</script>
</body>
</html>