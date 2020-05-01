<?php
    
    require 'global/config.php';
    require 'global/conexion2.php';
    //require 'ind.php';

    session_start();

    if (isset($_SESSION['user_id'])) {
        header("Location: index.php");
    }

    if (!empty($_POST['email']) && !empty($_POST['password'])) 
    {
        $rec = $pdo->prepare('SELECT id, email, correo, nombre, password, pais, estado, ciudad, codigoPostal, direccion, referencias FROM usuarios WHERE email:email');
        $rec->bindParam(':email',$_POST['email']);
        $rec->execute();

        $result = $rec->fetch(PDO::FETCH_ASSOC);

        $message='';

        if ($result && count($result)> 0 && password_verify($_POST['password'],$result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            header("Location: index.php");
        } else {
            $message = 'no puedes entrar xd';
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
    input[type="text"], input[type="password"]{
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
        <a class="nav-link" href="nosotros.html">NOSOTROS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.html">INICIO</a>
        </li>
        <li class="nav-item  dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CUENTA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registroForm.php">REGISTRATE</a>
          <a class="dropdown-item" href="loginForm.php">INICIAR SESIÓN</a>
        </div>
      </li>
</div>
    <!-- LOGO -->
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="carrito.html">CARRITO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="productos.php">PRODUCTOS</a>
        </li>
        </ul>
        </div>     
        </nav>

        <!--FORMULARIO-->
        <saction class="container">
        <font face="Forte">
        <h1 class="mt-5 display-4  text-center mb-5" style="text-shadow: 7px 5px 10px gray">INGRESAR A MI CUENTA</h1></font>
        </saction>

        <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <input name="email" type="text" placeholder="Correo electrónico">
            <input name="password" type="password" placeholder="Contraseña">
            <input type="submit" value="Entrar">

            <?php //if(!empty($message)): ?>
            <div>
                <?php //echo $message; ?>
            </div>
            <?php //endif; ?>

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
        <h6 class="mb-0">¡Siguenos en instagram!</h6>
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
        <h6 class="text-uppercase font-weight-bold">REPOSTERÍA DALIDA</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto text-justify" style="width: 60px;">
        <p>Todo el contenido de esta página web es propiedad de REPOSTERÍA DALIDA. <br>La reproducción total o parcial del mismo está prohibida.</p>

        </div>
    <!-- Grid column -->

    <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">PRODUCTOS</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
        <a href="#!">CLASICOS</a>
        </p>
        <p>
        <a href="#!">PARA LA CALOR</a>
        </p>
        <p>
        <a href="#!">MEXICANISIMOS</a>
        </p>
        <p>
        <a href="#!">REGALA AMOR</a>
        </p>

        </div>
    <!-- Grid column -->

    <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

    <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">REDES SOCIALES</h6>
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
        <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
        <img src="images/twitter.png" width="30" height="30">
        </a>
        </p>
        <p>
        <a class="d-flex justify-content-center" href="https://www.facebook.com/Reposteria-Dalida-111018520515805/?modal=admin_todo_tour">
        <img src="images/gmail.png" width="30" height="30">
        </a>
        </p>

        </div>
    <!-- Grid column -->

    <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

    <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">CONTACTO</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
        <i class="fas fa-home mr-3"></i> Principal socio: Cafeteria de CBTis 03</p>
        <p>
        <i class="fas fa-phone mr-3"></i> 246 49 7 47 54</p>
        <p>
        <i class="fas fa-print mr-3"></i> 246 203 6715</p>

        </div>
    <!-- Grid column -->

        </div>
    <!-- Grid row -->

        </div>
    <!-- Footer Links -->


    <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> REPOSTERÍA DALIDA</a>
        </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>