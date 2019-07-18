@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    has ingresado al sistema!

                     <div class="content">
                <div class="title m-b-md">
                    Bienvenido Admnistrador
                </div>
                 <li><a href="{{ route('register') }}">Ingresa un nuevo usuario</a></li>
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
@endsection