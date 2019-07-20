<!--@extends('layouts.app') -->

<html>


<!DOCTYPE html>
<html>
<head>
    <title> </title>
   <!--Made with love by Mutiullah Samim -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="estiloslogin/styles.css">

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
        <link  href="{!! asset('css/style.css') !!}" rel="stylesheet">
        <link  href="{!! asset('css/responsive.css') !!}" rel="stylesheet">

</head>

<body>


<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">

                   <div class="card-body">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="input-group form-group">
                             <div class="input-group-prepend">
                                <input id="name" type="text" class="form-control" placeholder="nombre" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="correo" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                            <div class="input-group form-group">
                                 <div class="input-group-prepend">
                            <!--<span class="input-group-text"><i class="fas fa-key"></i></span>-->
                            </div>
                                <input id="password-confirm" type="password" placeholder="confirma password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="col-md-4 text-center">

                                <button type="submit" class="btn float-right login_btn">
                                    Register
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

