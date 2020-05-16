<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'reposteria_dalida2';

    $conexion = @mysqli_connect ($host,$user,$password,$db);

    if (!$conexion) {
        echo "Error";
    }else{
       
    }

    $alert = '';
    session_start();
    if (!empty($_SESSION['active'])) 
    {
        header('location: index.php');
    }
    else{
       
        if (!empty($_POST)) 
        {
        
        if (empty($_POST['email']) && empty($_POST['contraseña'])) 
        {
            echo "<script> alert('Ingresa tu email y tu contraseña para ingresar') </script>";
        }
        else
        {

            $email = $_POST["email"];
            $contraseña = $_POST["contraseña"];

            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email= '".$email."' and contraseña= '".$contraseña."'");
            $nr = mysqli_num_rows($query);

            if ($nr == 1) 
            {
                $data = mysqli_fetch_array($query);
                //session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['pais'] = $data['pais'];
                $_SESSION['estado'] = $data['estado'];
                $_SESSION['ciudad'] = $data['ciudad'];
                $_SESSION['codigoPostal'] = $data['codigoPostal'];
                $_SESSION['direccion'] = $data['dirección'];
                $_SESSION['referencias'] = $data['referencias'];
                
                header('location: index.php');

            }
            else {
                echo "<script> alert('Datos incorrectos') </script>";
                session_destroy();
            }
        }
    }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Entrar</title>

    <style>
        
    .slider
    {
    background-image: url("images/uno.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
    }

    .sticky-top-2
    {
    position: -webkit-sticky;
    position: sticky;
    top:120px;
    z-index: 1030;
    }

    body
    {
    background-image: url(images/fond3.png);
    }

    p
    {
    font-size: 1rem;
    }

    input[type="text"] , input[type="password"]
    {
        width:35%;
    }

    body
    {
    background-image: url(images/fondoPastel.png);
    background-size: 100vw 100vh;
    background-attachment: fixed;
    }

    /* Input Forms*/
    input[type="text"], input[type="password"], input[type="email"] {
    outline: none;
    padding: 12px;
    display: block;
    width: 300px;
    border-radius: 5px;
    border: 1px solid #eee;
    margin: 20px auto;
    }

    input[type="submit"] {
    position: middle;
    padding: 10px;
    display: block;
    color: #fff;
    background: #DB7083;
    width: 260px;
    margin: 20px auto;
    margin-top: 0;
    border: 2px solid #C71585;
    border-radius: 6px;
    cursor: pointer;
    }
    input[type="submit"]:hover {
        color: #DB7083;
    background-color: #ffffff;
    }
    footer{

background-color: #FFB6C1;

}

    </style>

</head>

<body>

    <!-- LOGO -->
        <nav class="navbar sticky-top"style="background:#F7EFCE">
        <a class="navbar-brand d-flex justify-content-center" href="index.html">
        <img src="images/logob3.png" width="205" height="120" alt=""></a>
        </nav>

    <!-- MENU -->
        <nav class="navbar navbar-light navbar-toggleable-sm sticky-top-2" style="background:linear-gradient(#F3CD94, #EBBD79,#E0AD60,#D09C4C)">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex align-items-center collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
        <a class="nav-link" href="nosotros.html"><font color="SIENNA" face="Freestyle Script" size="5"><strong>NOSOTROS</strong></font><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.html"><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIO</strong></font></a>
        </li>
        <li class="nav-item  dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font color="SIENNA" face="Freestyle Script" size="5"><strong>
          CUENTA</strong></font>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registroForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>REGISTRATE</strong></font></a>
          <a class="dropdown-item" href="loginForm.php"><font color="SIENNA" face="Freestyle Script" size="5"><strong>INICIAR SESIÓN</strong></font></a>
        </div>
      </li>
</div>
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

        <!--FORMULARIO-->

        <section class="container">
        <font face="Forte">
        <h1 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray;  "><mark><font color="ORCHID">INGRESAR A MI CUENTA</font></mark></h1></font>
        </section>

        <div class="container">
        <form action="loginForm.php" method="POST">

            <input name="email" type="email" placeholder="Correo electrónico">
            <input name="contraseña" type="password" placeholder="Contraseña">
            <input type="submit" value="Entrar">

            <div> <?php echo isset($alert)? $alert : ''; ?> </div>

        </form>
        </div>

        <br>
    
    <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: #D09C4C;">
        <div class="container">

    <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

    <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0"><font face="Pristina" color="SIENNA" size="5"><strong>¡Siguenos en instagram!</strong></font></h6>
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
        <h6 class="text-uppercase font-weight-bold"><font color="TOMATO" >REPOSTERÍA DALIDA</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-justify" style="width: 60px;">
                    <p><font color="TEAL">Todo el contenido de esta página web es propiedad de REPOSTERÍA DALIDA. <br>La reproducción total o parcial del mismo está prohibida.</font></p>

        </div>
    <!-- Grid column -->

    <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
        <h6 class="text-uppercase font-weight-bold"><font color="TOMATO">PRODUCTOS</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="sub" href="clasicos.html"><font color="DARKMAGENTA">CLÁSICOS DE DALIDA</font></a>
                    </p>
                    <p>
                        <a class="sub" href="calor.html"><font color="FUCHSIA">PARA EL CALOR</font></a>
                    </p>
                    <p>
                        <a class="sub" href="mexico.html"><font color="DARKMAGENTA">MEXICANISIMOS</font></a>
                    </p>
                    <p>
                        <a class="sub" href="amor.html"><font color="FUCHSIA">REGALA AMOR</font></a>
                    </p>
        </div>
    <!-- Grid column -->

    <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
       <h6 class="text-uppercase font-weight-bold"><font color="TOMATO">REDES SOCIALES</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="d-flex justify-content-center" href="https://www.instagram.com/reposteriadalida?r=nametag">
                            <img src="images/instagram.png" width="30" height="30">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
                            <img src="images/facebook.png" width="30" height="30">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://twitter.com/ReposteriaDali2">
                            <img src="images/twitter.png" width="30" height="30">
                        </a>
                    </p>
                    <p>
                        <a class="d-flex justify-content-center" href="https://mail.google.com/mail/u/0/#inbox">
                            <img src="images/gmail.png" width="30" height="30">
                        </a>
                    </p>


        </div>
    <!-- Grid column -->

    <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

    <!-- Links -->
        <h6 class="text-uppercase font-weight-bold"><font color="TOMATO">CONTACTO</font></h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i><font color="   
SADDLEBROWN"> Principal socio: Cafeteria de CBTis 03</font>
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> <font color=" 
SADDLEBROWN">246 49 7 47 54</font>
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> <font color=" 
SADDLEBROWN">246 203 6715</font>
                    </p>

        </div>
    <!-- Grid column -->

        </div>
    <!-- Grid row -->

        </div>
    <!-- Footer Links -->


    <!-- Copyright -->
        <div class="footer-copyright text-center py-3"><font color="    
SADDLEBROWN">
            © 2020 Copyright:</font>
            <a href="https://mdbootstrap.com/"><font color="    
SADDLEBROWN"> REPOSTERÍA DALIDA</font></a>
        </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>