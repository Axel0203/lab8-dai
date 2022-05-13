<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/lab8/css/bootstrap.css"/>
  </head>
  <body>

  <?php $url="http://".$_SERVER["HTTP_HOST"]."/lab8" ?>

  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="#">Administrador del Sitio Web <span class="sr-only"></span></a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/paises.php">Relaciones con países</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/comercios.php">Registro de comercios</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Productos</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/usuarios.php">Administración de usuarios</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php" onclick="return confirm('¿Seguro que desea cerrar sesión?')">Cerrar</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/paises.php"> Ver Sitio Web </a>
      </div>
  </nav>

    <div class="container">
    <br/>
        <div class="row">