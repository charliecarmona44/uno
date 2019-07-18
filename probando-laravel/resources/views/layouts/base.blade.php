<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="icon" href="Resouces/img/brazos.png" type="image/png">
        <title>Brazos Firmes</title>
        <!-- Bootstrap CSS -->
        <link href="{!! asset('vendors/animate-css/animate.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! asset('vendors/linericon/style.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('vendors/linericon/style.css') !!}" rel="stylesheet">
        <link href="{!! asset('vendors/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('vendors/lightbox/simpleLightbox.css') !!}" rel="stylesheet">
        <link href="{!! asset('vendors/nice-select/css/nice-select.css') !!}" rel="stylesheet">
        <link href="{!! asset('vendors/animate-css/animate.css') !!}" rel="stylesheet">
        <link  href="vendors/popup/magnific-popup.css" href="{!! asset('vendors/popup/magnific-popup.css') !!}" rel="stylesheet">


        <!-- main css -->
        <link  href="{!! asset('css/style.css') !!}" rel="stylesheet">
        <link  href="{!! asset('css/responsive.css') !!}" rel="stylesheet">



        <title>BRAZOS FIRMES</title>
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a>
                                        <li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Ubicacion</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>

                                <form class="form-inline my-2 my-lg-0">

                                   <div class="navbar navbar-expand-lg navbar-dark">
                                   @if (Route::has('login'))
                                   <div class="top-right links">
                                    @if (Auth::check())
                                   <a href="{{ url('/home') }}">Home</a>
                                   @else
                                <a  class="btn btn-danger btn-lg" href="{{ url('/login') }}">Login</a>
                                <a  class="btn btn-danger btn-lg" href="{{ url('/register') }}">Register</a>
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
        <!--================Header Menu Area =================-->






<!--New-->

<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->


        <link href="{!! asset('vendors/animate-css/animate.css') !!}" rel="stylesheet">

        <script src="public/js/jquery-3.3.1.min.js"></script>
        <script src="public/js/popper.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/stellar.js"></script>
        <script src="public/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="public/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="public/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="public/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="public/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="public/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="public/js/jquery.ajaxchimp.min.js"></script>
        <script src="public/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="public/vendors/counter-up/jquery.counterup.js"></script>
        <script src="public/js/mail-script.js"></script>
        <script src="public/js/theme.js"></script>

         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>