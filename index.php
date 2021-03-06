﻿<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>

        .slider {
            background-image: url("images/uno.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .sticky-top-2 {
            position: -webkit-sticky;
            position: sticky;
            top: 120px;
            z-index: 1030;
        }

        body {
            background-image: url(images/ondo.png);
        }

        p {
            font-size: 1rem;
        }
    </style>
    <title>REPOSTERÍA DALIDA</title>
</head>
<body>

    <div class="container-fluid slider d-flex align-content-center flex-wrap d-flex justify-content-center">
        <font face="Forte">
            <h1 class="display-1"> <mark><em>¡MÁS QUE UN ANTOJO!</em></mark></h1>
        </font>
    </div>

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
                <li class="nav-item active">
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
                    <a class="nav-link" href="carrito.html"><ul class="navbar-nav ml-auto">CARRITO(<?php echo (empty($_SESSION ['CARRITO']))?
            0:count($_SESSION['CARRITO']);
            ?>) <span class="sr-only">(current)</span></strong> </font><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">PRODUCTOS</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- container -->

    <section class="container">
        <font face="Forte">
            <h1 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray">¡BIENVENIDOS!</h1>
        </font>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4">
                <br><br>
                <video src="images/video.mp4" width="400" height="270" controls></video>
            </div>
            <div class="col-5 m-lg-5">
                <h3> ¿Se te antoja algo cremosito?¿Buscas postres innovadores?¿Eres ecológico?¿tienes hambre?</h3>
                <p class="text-justify mb-4 ">Si respondiste a tan solo una de las anteriores cuestiones que sí, dejeme informarle que usted se encuentra en la página web correcta.</p>
                <h3>REPOSTERÍA DALIDA</h3>
                <p class="text-justify mb-5">La mejor repostería, con los mejores precios y sobre todo... ¡La mejor calidad!</p>
            </div>
            <div class="col-1"></div>
            
        </div>
    </div>

    <br><br>
    

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4">
                <img src="images/1.jpeg" width="400" height="400">
            </div>
            
            <div class="col-1"></div>
            <div class="col-4">
                <img src="images/2.jpeg" width="400" height="400">
            </div>
            
        </div>
    </div>

    <br><br>

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
<br>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center mb-5"></h1>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #D09C4C;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0"><font face="Pristina" color="SIENNA" size="5"><strong><marquee behavior="alternate" direction="up" width="80%"><marquee direction="right">¡Siguenos en instagram!</strong></font></marquee></marquee></h6>
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
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" face="Arial" size="4">REPOSTERÍA DALIDA</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-justify" style="width: 60px;">
                    <p><font color="TEAL" face="Arial" size="4">Todo el contenido de esta página web es propiedad de REPOSTERÍA DALIDA. <br>La reproducción total o parcial del mismo está prohibida.</font></p>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" face="Arial" size="4">PRODUCTOS</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="sub" href="clasicos.html"><font color="DARKMAGENTA"face="Arial" size="4">CLÁSICOS DE DALIDA</font></a>
                    </p>
                    <p>
                        <a class="sub" href="calor.html"><font color="FUCHSIA"face="Arial" size="4">PARA EL CALOR</font></a>
                    </p>
                    <p>
                        <a class="sub" href="mexico.html"><font color="DARKMAGENTA"face="Arial" size="4">MEXICANISIMOS</font></a>
                    </p>
                    <p>
                        <a class="sub" href="amor.html"><font color="FUCHSIA" face="Arial" size="4">REGALA AMOR</font></a>
                    </p>

                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" face="Arial" size="4">REDES SOCIALES</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="d-flex justify-content-center" href="https://www.instagram.com/reposteriadalida?r=nametag">
                            <img src="images/instagram.png" width="40" height="40">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
                            <img src="images/facebook.png" width="40" height="40">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://twitter.com/ReposteriaDali2">
                            <img src="images/twitter.png" width="40" height="40">
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
                    <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" size="4">CONTACTO</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i><font color="   
SADDLEBROWN" face="Arial" size="5"> Principal socio: Cafeteria de CBTis 03</font>
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> <font color=" 
SADDLEBROWN" face="Arial" size="4">246 49 7 47 54</font>
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> <font color=" 
SADDLEBROWN"face="Arial" size="4">246 203 6715</font>
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3"><font color="    
SADDLEBROWN" face="Arial" size="4">
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