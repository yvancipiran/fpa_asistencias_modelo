<?php

?>

<!DOCTYPE html>
<html lang="es-ve">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>Formulario Cédula</title>
</head>

<body>

<nav class="navbar navbar-expand-lg " style="background-color:#7C7FF4">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="container mt-5">

        <div class="jumbotron" style="box-shadow: 1px 1px 2px black; border-radius: 28px; background-color:#FFAF58">
            
            <div class="row">

                <div class="col-12 col-md-6 ">
                    <img class="img-responsive" src="img/img2.jpg" alt="" style="width:50%">
                </div>

                <div class="col-12 col-md-6">
                    <form action="procesar_cedula.php" method="post">
                        <label class="lead" for="cedula">Introduzca su Número de Cédula</label>
                        <input class="form-control" type="text" name="cedula" id="cedula" style="background-color:#F5FE7D" required >
                        <hr>
                        <button class="btn btn-primary" type="submit" style="background-color:#5A5FEF">Enviar</button>
                    </form>
                </div>

            </div> <!--fin del Row-->
        </div> <!--Fin jumbotron-->
    </div> <!--Fin de Container-->

<!-- 
   plantilla 
-->



</body>
<script src="vendor/jquery/jquery-3.5.1.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>














</html>