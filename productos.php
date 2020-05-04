<?php

   include 'global/config.php';
   include 'global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

<style>

  .imagen:hover {
    -webkit-transform:scale(1.3);
    transform:scale(1.3);
    filter: saturate(180%);
                }

  .slider{
    background-image: url("images/uno.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
  }

  .sticky-top-2{
    position: -webkit-sticky;
    position: sticky;
    top:120px;
    z-index: 1030;
  }

  body{
    background-image: url(images/fondopr.png);
    background-size: 100vw 100vh;
    background-attachment: fixed;

  }

  @font-face {
    font-family: "Sunday Best";
    src: url("Sunday Best.otf");
             }

   a {
    font-family: "Sunday Best", cursive;}
  h2 {
    font-family: "Sunday Best", cursive;
    font-size: 100%;
            }
</style>
<title>PRODUCTOS</title>
  </head>
  <body>

<!-- LOGO -->
    <nav class="navbar sticky-top" style=" background:#F7EFCE ">
        <a class="navbar-brand d-flex justify-content-center" href="index.php">
            <img src="images/logob3.png" width="205" height="120" alt="">
        </a>
    </nav>

    <!-- MENU -->
    <nav class="navbar navbar-light navbar-toggleable-sm sticky-top-2" style="background:
   linear-gradient(#F3CD94, #EBBD79,#E0AD60,#D09C4C)">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex align-items-center collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="nosotros2.html">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">INICIO<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      CUENTA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="cerrarSesion.php">CERRAR SESIÓN</a>
                    </div>
                  </li>
            </ul>
            <!-- LOGO -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="carrito.html">CARRITO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="productos.php">PRODUCTOS</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- container -->

   <section class=" mt-5 d-flex align-content-center flex-wrap d-flex justify-content-center">
        <font face="Sunday Best">
          <br>
            <h1 class="display-4" style="text-shadow: 7px 5px 10px gray;  " > <mark><em>PRODUCTOS</em></mark></h1>
        </font>
    </section>


<saction class="container p-3 mb-2 bg-warning text-dark">
   <font face="Forte">
  <h2 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray;  " >PARA LA CALOR</h2></font>
  <br>
</saction>

  <!--1-->
<div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

  <div class="container text-center" style="background: rgba(0,0,0,0.4);" > 
  <div class="row">
  <!--PARA MOSTRAR LOS PRODUCTOS DE LA BASE DE DATOS-->
  <?php
    $sentencia=$pdo->prepare ("SELECT * FROM `productos` WHERE ncategoria=1");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
    //print_r ($listaProductos);
  ?>

  <?php
    foreach ($listaProductos as $producto)
      { 
      ?>

<div class="col-4">
      <div class="card-deck">
      <div class="card">
      <img 
        title="<?php echo $producto['nombre']; ?>"  
        alt="<?php echo $producto['imagen']; ?>"     
        src= "images/postres/<?php echo $producto['imagen']; ?>" class="imagen"
        data-toggle="popover"
        data-trigger="hover"
        height="317px"
        title="<?php echo $producto['nombre']; ?>" 
        data-content="<?php echo $producto['descripcion'];
        ?>"
      >
    
    <div class="card-body">
      <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
      <h6 class="card-text font-weight-bolder"> $<?php echo $producto['precio']; ?>. </h6> <p class="font-italic"><?php echo $producto['descripcion']; ?> </p> <br>
      
      <!-- formulario -->
      <form action="" method="post">
        <input type="hidden" name="idp" id="idp" value="<?php echo openssl_encrypt ($producto['idp'],COD,KEY); ?>">
        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt ($producto['nombre'],COD,KEY); ?>">  
        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt ($producto['precio'],COD,KEY); ?>">   
        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ?>">

        <!-- boton -->
        <div class="card-footer">
        <button class="btn btn-primary" 
        name="btnAccion"
        value="AGREGAR"
        type="submit" >AGREGAR AL CARRITO</button>
        </div> 
      </form>
    </div>
    </div>
   <br> 
    </div>    
    </div>

        <?php
        }
      ?>
      </div>
     <br> 
      </div>



<saction class="container p-3 mb-2 bg-warning text-dark">
   <font face="Forte">
  <h2 class="mt-5 display-4  text-center mb-5 ani" style="text-shadow: 7px 5px 10px gray;  " >PARA EL FRIO</h2></font>
  <br>
</saction>
  <!--2-->
<div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

  <div class="container text-center" style="background: rgba(0,0,0,0.4);" > 
  <div class="row">
  <!--PARA MOSTRAR LOS PRODUCTOS DE LA BASE DE DATOS-->
  <?php
    $sentencia=$pdo->prepare ("SELECT * FROM `productos` WHERE ncategoria=2");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
    //print_r ($listaProductos);
  ?>

  <?php
    foreach ($listaProductos as $producto)
      { 
      ?>

<div class="col-4">
      <div class="card-deck">
      <div class="card">
      <img 
        title="<?php echo $producto['nombre']; ?>"  
        alt="<?php echo $producto['imagen']; ?>"     
        src= "images/postres/<?php echo $producto['imagen']; ?>" class="imagen"
        data-toggle="popover"
        data-trigger="hover"
        height="317px"
        title="<?php echo $producto['nombre']; ?>" 
        data-content="<?php echo $producto['descripcion'];
        ?>"
      >
    
    <div class="card-body">
      <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
      <h6 class="card-text font-weight-bolder"> $<?php echo $producto['precio']; ?>. </h6> <p class="font-italic"><?php echo $producto['descripcion']; ?> </p> <br>
      
      <!-- formulario -->
      <form action="" method="post">
        <input type="hidden" name="idp" id="idp" value="<?php echo openssl_encrypt ($producto['idp'],COD,KEY); ?>">
        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt ($producto['nombre'],COD,KEY); ?>">  
        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt ($producto['precio'],COD,KEY); ?>">   
        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ?>">

        <!-- boton -->
        <div class="card-footer">
        <button class="btn btn-primary" 
        name="btnAccion"
        value="AGREGAR"
        type="submit" >AGREGAR AL CARRITO</button>
        </div> 
      </form>
    </div>
    </div>
   <br> 
    </div>    
    </div>

        <?php
        }
      ?>
      </div>
     <br> 
      </div>



<saction class="container p-3 mb-2 bg-warning text-dark">
   <font face="Forte">
  <h2 class="mt-5 display-4  text-center mb-5 ani" style="text-shadow: 7px 5px 10px gray;  " >DE FIESTA</h2></font>
  <br>
</saction>

 <!--3-->
<div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

  <div class="container text-center" style="background: rgba(0,0,0,0.4);" > 
  <div class="row">
  <!--PARA MOSTRAR LOS PRODUCTOS DE LA BASE DE DATOS-->
  <?php
    $sentencia=$pdo->prepare ("SELECT * FROM `productos` WHERE ncategoria=3");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
    //print_r ($listaProductos);
  ?>

  <?php
    foreach ($listaProductos as $producto)
      { 
      ?>

<div class="col-4">
      <div class="card-deck">
      <div class="card">
      <img 
        title="<?php echo $producto['nombre']; ?>"  
        alt="<?php echo $producto['imagen']; ?>"     
        src= "images/postres/<?php echo $producto['imagen']; ?>" class="imagen"
        data-toggle="popover"
        data-trigger="hover"
        height="317px"
        title="<?php echo $producto['nombre']; ?>" 
        data-content="<?php echo $producto['descripcion'];
        ?>"
      >
    
    <div class="card-body">
      <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
      <h6 class="card-text font-weight-bolder"> $<?php echo $producto['precio']; ?>. </h6> <p class="font-italic"><?php echo $producto['descripcion']; ?> </p> <br>
      
      <!-- formulario -->
      <form action="" method="post">
        <input type="hidden" name="idp" id="idp" value="<?php echo openssl_encrypt ($producto['idp'],COD,KEY); ?>">
        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt ($producto['nombre'],COD,KEY); ?>">  
        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt ($producto['precio'],COD,KEY); ?>">   
        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ?>">

        <!-- boton -->
        <div class="card-footer">
        <button class="btn btn-primary" 
        name="btnAccion"
        value="AGREGAR"
        type="submit" >AGREGAR AL CARRITO</button>
        </div> 
      </form>
    </div>
    </div>
   <br> 
    </div>    
    </div>

        <?php
        }
      ?>
      </div>
     <br> 
      </div>


<!-- PRODUCTOS NUEVOS-->
<saction class="container p-3 mb-2 bg-warning text-dark">
   <font face="Forte">
  <h2 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray">LO MÁS NUEVO</h2></font>
  <br>
</saction>
     <div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

  <!--Nuevo-->
  <div class="container text-center" style="background: rgba(0,0,0,0.4);" > 
  <div class="row">
  <!--PARA MOSTRAR LOS PRODUCTOS DE LA BASE DE DATOS-->
  <?php
    $sentencia=$pdo->prepare ("SELECT * FROM `productos` WHERE ncategoria=4");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
    //print_r ($listaProductos);
  ?>

  <?php
    foreach ($listaProductos as $producto)
      { 
      ?>

<div class="col-4">
      <div class="card-deck">
      <div class="card">
      <img 
        title="<?php echo $producto['nombre']; ?>"  
        alt="<?php echo $producto['imagen']; ?>"     
        src= "images/postres/<?php echo $producto['imagen']; ?>" class="imagen"
        data-toggle="popover"
        data-trigger="hover"
        height="317px"
        title="<?php echo $producto['nombre']; ?>" 
        data-content="<?php echo $producto['descripcion'];
        ?>"
      >
    
    <div class="card-body">
      <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
      <h6 class="card-text font-weight-bolder"> $<?php echo $producto['precio']; ?>. </h6> <p class="font-italic"><?php echo $producto['descripcion']; ?> </p> <br>
      
      <!-- formulario -->
      <form action="" method="post">
        <input type="hidden" name="idp" id="idp" value="<?php echo openssl_encrypt ($producto['idp'],COD,KEY); ?>">
        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt ($producto['nombre'],COD,KEY); ?>">  
        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt ($producto['precio'],COD,KEY); ?>">   
        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt (1,COD,KEY) ?>">

        <!-- boton -->
        <div class="card-footer">
        <button class="btn btn-primary" 
        name="btnAccion"
        value="AGREGAR"
        type="submit" >AGREGAR AL CARRITO</button>
        </div> 
      </form>
    </div>
    </div>
   <br> 
    </div>    
    </div>

        <?php
        }
      ?>
      </div>
     <br> 
      </div>

<div class="container" style="background: rgba(0,0,0,0.4);">
  <div class="row">
    <div class="col-12">
      <p></p>
    </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
     <h1 class="display-1 text-center mb-5"></h1> 
    </div>
</div>
</div>

 <?php include 'templates/footer.php';?>