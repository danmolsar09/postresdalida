<?php

   include 'global/config.php';
   include 'global/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script type='text/javascript'>
// <![CDATA[
var colour="#FFE4E1";
var sparkles=40;

var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();
window.onload=function() { if (document.getElementById) {
var i, rats, rlef, rdow;
for (var i=0; i<sparkles; i++) {
var rats=createDiv(3, 3);
rats.style.visibility="hidden";
document.body.appendChild(tiny[i]=rats);
starv[i]=0;
tinyv[i]=0;
var rats=createDiv(5, 5);
rats.style.backgroundColor="transparent";
rats.style.visibility="hidden";
var rlef=createDiv(1, 5);
var rdow=createDiv(5, 1);
rats.appendChild(rlef);
rats.appendChild(rdow);
rlef.style.top="2px";
rlef.style.left="0px";
rdow.style.top="0px";
rdow.style.left="2px";
document.body.appendChild(star[i]=rats);
}
set_width();
sparkle();
}}
function sparkle() {
var c;
if (x!=ox || y!=oy) {
ox=x;
oy=y;
for (c=0; c<sparkles; c++) if (!starv[c]) {
star[c].style.left=(starx[c]=x)+"px";
star[c].style.top=(stary[c]=y)+"px";
star[c].style.clip="rect(0px, 5px, 5px, 0px)";
star[c].style.visibility="visible";
starv[c]=50;
break;
}
}
for (c=0; c<sparkles; c++) {
if (starv[c]) update_star(c);
if (tinyv[c]) update_tiny(c);
}
setTimeout("sparkle()", 40);
}
function update_star(i) {
if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
if (starv[i]) {
stary[i]+=1+Math.random()*3;
if (stary[i]<shigh+sdown) {
star[i].style.top=stary[i]+"px";
starx[i]+=(i%5-2)/5;
star[i].style.left=starx[i]+"px";
}
else {
star[i].style.visibility="hidden";
starv[i]=0;
return;
}
}
else {
tinyv[i]=50;
tiny[i].style.top=(tinyy[i]=stary[i])+"px";
tiny[i].style.left=(tinyx[i]=starx[i])+"px";
tiny[i].style.width="2px";
tiny[i].style.height="2px";
star[i].style.visibility="hidden";
tiny[i].style.visibility="visible"
}
}
function update_tiny(i) {
if (--tinyv[i]==25) {
tiny[i].style.width="1px";
tiny[i].style.height="1px";
}
if (tinyv[i]) {
tinyy[i]+=1+Math.random()*3;
if (tinyy[i]<shigh+sdown) {
tiny[i].style.top=tinyy[i]+"px";
tinyx[i]+=(i%5-2)/5;
tiny[i].style.left=tinyx[i]+"px";
}
else {
tiny[i].style.visibility="hidden";
tinyv[i]=0;
return;
}
}
else tiny[i].style.visibility="hidden";
}
document.onmousemove=mouse;
function mouse(e) {
set_scroll();
y=(e)?e.pageY:event.y+sdown;
x=(e)?e.pageX:event.x+sleft;
}
function set_scroll() {
if (typeof(self.pageYOffset)=="number") {
sdown=self.pageYOffset;
sleft=self.pageXOffset;
}
else if (document.body.scrollTop || document.body.scrollLeft) {
sdown=document.body.scrollTop;
sleft=document.body.scrollLeft;
}
else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
sleft=document.documentElement.scrollLeft;
sdown=document.documentElement.scrollTop;
}
else {
sdown=0;
sleft=0;
}
}
window.onresize=set_width;
function set_width() {
if (typeof(self.innerWidth)=="number") {
swide=self.innerWidth;
shigh=self.innerHeight;
}
else if (document.documentElement && document.documentElement.clientWidth) {
swide=document.documentElement.clientWidth;
shigh=document.documentElement.clientHeight;
}
else if (document.body.clientWidth) {
swide=document.body.clientWidth;
shigh=document.body.clientHeight;
}
}
function createDiv(height, width) {
var div=document.createElement("div");
div.style.position="absolute";
div.style.height=height+"px";
div.style.width=width+"px";
div.style.overflow="hidden";
div.style.backgroundColor=colour;
return (div);
}
// ]]>
</script>
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
  #imagen1{
    align-items: center;
    justify-content: center;
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
            mark
{
    background-color: white;
    
}
footer{

background-color: #FFB6C1;

}
</style>
<title><font face="Forte" color="CRIMSON">PRODUCTOS</font></title>
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
                    <a class="nav-link" href="nosotros.html"  ><font color="SIENNA" face="Freestyle Script" size="5"><strong>NOSOTROS</strong></font></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html" ><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIO</strong> </font><span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><font color="SIENNA" face="Freestyle Script" size="5"><strong>
                      CUENTA</strong></font>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="registroForm.php" ><font color="SIENNA" face="Freestyle Script" size="5"><strong>REGISTRATE</strong></font></a>
                      <a class="dropdown-item" href="loginForm.php" ><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIAR SESIÓN</strong></font></a>
                    </div>
                  </li>

            </ul>
            <!-- LOGO -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="carrito.html"><font color="SIENNA" face="Freestyle Script" size="5"><strong>CARRITO</strong> </font><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>PRODUCTOS</strong></font></a>
                </li>
            </ul>
        </div>
    </nav>
<!-- container -->

   <section class=" mt-5 d-flex align-content-center flex-wrap d-flex justify-content-center">
        <font face="Forte" color="CRIMSON">
          <br>
            <h1 class="display-4" style="text-shadow: 7px 5px 10px gray;  " > <mark><em><font color="SEAGREEN">PRODUCTOS</font></em></mark></h1>
        </font>
    </section>


<saction class="container p-3 mb-2 bg-warning text-dark">
   <font face="Freestyle Script" color="SPRINGGREEN">
  <h2 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray;  " >PARA EL CALOR</h2></font>
  <br>
 
 <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4"> <marquee>
                <img src="images/1.jpeg" width="400" height="400"></marquee>
            </div>
            
            <div class="col-1"></div>
            <div class="col-4"> <marquee>
                <img src="images/2.jpeg" width="400" height="400"></marquee>
            </div>
            
        </div>
    </div>

    <br><br>

            
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
    $sentencia=$pdo->p....repare ("SELECT * FROM `productos` WHERE ncategoria=1");
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
   <font face="Freestyle Script" color="SPRINGGREEN" >
  <h2 class="mt-5 display-4  text-center mb-5 ani" style="text-shadow: 7px 5px 10px gray;  " >PARA EL FRIO</h2></font>
  <br>
  <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4">
                <img src="images/3.jpeg" width="400" height="400">
            </div>
            
            <div class="col-1"></div>
            <div class="col-4">
                <img src="images/4.jpeg" width="400" height="400">
            </div>
            
        </div>
    </div>
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
   <font face="Freestyle Script" color="SPRINGGREEN">
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
   <font face="Freestyle Script" color="SPRINGGREEN">
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