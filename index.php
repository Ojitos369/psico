<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/validacion.css">
    <link rel="stylesheet" href="./css/segundo.css">
    <title>Ingresar</title>
</head>
<body>
    <div class="encabezado"><img src="./media/logo.jpg" alt="logo" class="logo"></div>
    <div class="container">
        <?php
            if(isset($_SESSION['id'])){
                $_SESSION['id'] = 0;
            }
            if(isset($_GET['error'])){
                $mensaje_error = "
                    <div class=\"error\">
                    <p>El nombre no coincide con el numero de identificacion o hay campos vacios que faltan por llenar</p>
                    </div>";
                echo $mensaje_error;
            }
        ?>
        <form action="./php/validar.php" method="POST" class="form">
            <div class="datos">
                <input type="text" name="nombre" placeholder="Nombre completo" class="nombre">
                <br>
                <input type="number" name="identificacion" placeholder="No de identificado" class="identificacion">
                <br>
                <input type="submit" value="Entrar" class="entrar">
            </div>
        </form>
        <div class="container-consulta">
            <a href="consulta.php" class="consulta"><button>Consulta</button></a>
        </div>
    </div>

    <div class="footer">
        <div class="contact-moderno">
            <ul>
                <li><a href="http://fb.com/rrconecta">Facebook    <img src="./media/fb.png" alt="fb"></a></li>
                <li><a href="https://twitter.com/rr_conecta">Twitter    <img src="./media/tw.png" alt="tw"></a></li>
            </ul>
        </div>
        <div class="contact-moderno">
            <ul>
                <li><a href="https://www.instagram.com/rr_conecta">Instagram    <img src="./media/ig1.png" alt="ig"></a></li>
                <li><a href="#">Linkedin    <img src="./media/in.png" alt="linkedin"></a></li>
            </ul>
        </div>
        <div class="contacto">
            <img class="contacto-img" src="./media/contacto.jpg" alt="contacto">
        </div>
    </div>
</body>
</html>