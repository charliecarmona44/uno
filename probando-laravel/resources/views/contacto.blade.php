<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Brazos Firmes </title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<body>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#e0e0e0 ;">
    <a class="navbar-brand" href="#">
        <img src="Resouces/img/brazos.png" width="50" height="50" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div>
        <h5 width="70" height="70">
            Brazos Fuertes
        </h5>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informacion</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="formulario.php">Registro</a>
                    <a class="dropdown-item" href="#">Contacto</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ubicacion</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Campañas</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>


<div class="card">
    <div class="card-body" style="background-color:#bf360c  ;">
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nombres</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group col-md-4">
                    <label>Apellido Paterno</label>
                    <input type="text" name="appl" class="form-control"  placeholder="Apellido Paterno">
                </div>

                <div class="form-group col-md-4">
                    <label>Apellido Materno</label>
                    <input type="text" name="apml" class="form-control"  placeholder="Apellido Materno">
                </div>
                <div class="form-group col-md-4">
                    <label>Direccion</label>
                    <input type="text" name="address" class="form-control" placeholder="Colonia">
                </div>
                <div class="form-group col-md-4">
                    <label>Calle</label>
                    <input type="text" name="calle" class="form-control"  placeholder="Calle">
                </div>
                <div class="form-group col-md-4">
                    <label>Numero</label>
                    <input type="text" name="num" class="form-control"  placeholder="Numero exterior">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Ciudad</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label>Estado</label>
                    <select  class="form-control" name="state">
                        <option selected>Hidalgo</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label>Municipio</label>
                    <select class="form-control" name="muni">
                         <option value="" disabled selected>Seleccione La Opcion</option>
                         <option value="Primaria">Primaria</option>
                         <option value="Secundaria">Secundaria</option>
                         <option value="Bachillerato">Bachillerato</option>
                         <option value="Carrera Tecnica">Carrera Tecnica</option>
                                                    <option value="Universitario">Universitario</option>
                                                    <option value="Carrera Universitaria">Carrera Universitaria</option>
                                                    <option value="Lincenciatura">Licenciatura</option>
                                                </select>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Codigo Postal</label>
                    <input type="text" class="form-control" name="zip">
                </div>
            </div>
            <div class="form-group">

            </div>
            <button type="submit" class="btn btn-outline-secondary">Enviar</button>
        </form>

    </div>
</div>


<!-- Starts the resouces of JavaScript  --->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
