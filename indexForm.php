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

  body
  {
  background-image: url(images/fondoPastel.png);
  background-size: 100vw 100vh;
  background-attachment: fixed;
  }

  p{
    font-size: 1rem;
  }

  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 500;
    font-size: 30px;
    color: #ffffff;
    background-color: #DB7083;
    border-radius: 6px;
    border: 2px solid #C71585;
  }
  .boton_personalizado:hover{
    color: #DB7083;
    background-color: #ffffff;
    text-decoration:none;
  }
  mark
{
    background-color: white;
    
}
footer{

background-color: #FFB6C1;

}

</style>
<title>REGISTRO</title>
  </head>
  <body>

<!-- LOGO -->
<nav class="navbar sticky-top"style="background:#F7EFCE">
  <a class="navbar-brand d-flex justify-content-center" href="index.html">
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
      <li class="nav-item ">
        <a class="nav-link" href="index.html"  ><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIO</strong></font><span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item active ">
        <a class="nav-link" href="indexForm.php">CUENTA</a>
      </li>-->
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font color="SIENNA" face="Freestyle Script" size="5"><strong>
          CUENTA</strong></font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registroForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>REGISTRATE</strong></font></a>
          <a class="dropdown-item" href="loginForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIAR SESIÓN</strong></font></a>
        </div>
      </li>

    </ul>
<!-- LOGO -->
     <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#"><font color="SIENNA" face="Freestyle Script" size="5"><strong><ul class="navbar-nav ml-auto">CARRITO(<?php echo (empty($_SESSION ['CARRITO']))?
            0:count($_SESSION['CARRITO']);
            ?>) <span class="sr-only">(current)</span></strong> </font><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>PRODUCTOS</strong></font></a>
      </li>
    </ul>
  </div>     
   </nav>

<!-- container -->

<saction class="container">
   <font face="Forte">
  <h1 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray;  "><mark><font color="SEAGREEN">INICIA SESIÓN O REGISTRATE</font></mark></h1></font>
</saction>

  <div class="container">
  <div align="center">
  <!--<button type="button" class="btn btn-secondary btn-lg botones"  href="loginForm.php"> INICIAR SESIÓN </button> <br><br><br>
  <button type="button" class="btn btn-secondary btn-lg botones"> <a href="registroForm.php"> REGISTRARSE </a></button>-->

  <a class="boton_personalizado" href="loginForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIAR SESIÓN</strong></font></a>
  <br><br><br>
  <a class="boton_personalizado" href="registroForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>REGISTRARSE</strong></font></a>
  </div>
  </div>


<br><br><br><br>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #D09C4C;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0"><font face="Pristina" color="SIENNA"  size="5"><strong><marquee behavior="alternate" direction="up" width="80%"><marquee direction="right">¡Siguenos en instagram!</strong></font></marquee></marquee></h6>
                    </div>

                </div>
                <!-- Grid row-->

            </div>
        </div>


        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" face="Arial" size="5">REPOSTERÍA DALIDA</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-justify" style="width: 60px;">
                    <p><font color="TEAL" face="Arial" size="5">Todo el contenido de esta página web es propiedad de REPOSTERÍA DALIDA. <br>La reproducción total o parcial del mismo está prohibida.</font></p>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" face="Arial" size="5">PRODUCTOS</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="sub" href="clasicos.html"><font color="DARKMAGENTA"face="Arial" size="5">CLÁSICOS DE DALIDA</font></a>
                    </p>
                    <p>
                        <a class="sub" href="calor.html"><font color="FUCHSIA"face="Arial" size="5">PARA EL CALOR</font></a>
                    </p>
                    <p>
                        <a class="sub" href="mexico.html"><font color="DARKMAGENTA"face="Arial" size="5">MEXICANISIMOS</font></a>
                    </p>
                    <p>
                        <a class="sub" href="amor.html"><font color="FUCHSIA" face="Arial" size="5">REGALA AMOR</font></a>
                    </p>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" face="Arial" size="5">REDES SOCIALES</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="d-flex justify-content-center" href="https://www.instagram.com/reposteriadalida?r=nametag">
                            <img src="images/instagram.png" width="60" height="60">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
                            <img src="images/facebook.png" width="60" height="60">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://twitter.com/ReposteriaDali2">
                            <img src="images/twitter.png" width="60" height="60">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://mail.google.com/mail/u/0/#inbox">
                            <img src="images/gmail.png" width="60" height="60">
                        </a>
                    </p>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" size="5" face="Arial">CONTACTO</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i><font color="   
SADDLEBROWN" face="Arial" size="5"> Principal socio: Cafeteria de CBTis 03</font>
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> <font color=" 
SADDLEBROWN" face="Arial" size="5">246 49 7 47 54</font>
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> <font color=" 
SADDLEBROWN"face="Arial" size="5">246 203 6715</font>
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3"><font color="    
SADDLEBROWN" face="Arial" size="5">
            © 2020 Copyright:</font>
            <a href="https://mdbootstrap.com/"><font color="    
SADDLEBROWN" face="Arial" size="5"> REPOSTERÍA DALIDA</font></a>
        </div>
  <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>