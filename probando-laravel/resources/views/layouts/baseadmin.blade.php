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
                        <a class="" href=""><img src="img/Imagen1.png" width="121"height="127"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">


                                <form class="form-inline my-2 my-lg-0">
                                   <h3> "Ingresa al portal de administraores"</h3>
                                   <p> </p>
                                   <div class="navbar navbar-expand-lg navbar-dark">
                                   @if (Route::has('login'))
                                   <div class="top-right links">
                                    @if (Auth::check())
                                   <a href="{{ url('/home') }}">Home</a>
                                   @else
                                <a class="btn btn-danger btn-lg" href="{{
                                url('/login') }}">
                                  <span class="spinner-grow spinner-grow-sm"></span>
                                  Ingresar al sistema
                                </a>

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

        <section class="banner_area">
            <div class="box_1620">
                <div class="banner_inner d-flex align-items-center">
                    <div class="container">
                        <div class="banner_content text-center" >
                            <h3>"Somos Corazones que Piensan<br>
                                Manos que Impulsan"</h3>


                        </div>
                    </div>
                </div>
            </div>
        </section>







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