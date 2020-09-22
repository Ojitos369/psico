<?php
session_start();
include("./php/conexion.php");
if(isset($_SESSION['id'])){
    $_SESSION['id'] = 0;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/validacion.css">
    <title>Ingresar</title>
</head>
<body>
<div class="encabezado"><a href="index.php"><img src="./media/logo.jpg" alt="logo" class="logo"></a></div>
    <div class="container">
        <?php
            if(isset($_GET['error'])){
                $mensaje_error = "
                    <div class=\"error\">
                        <p>El nombre no coincide con el numero de identificacion o hay campos vacios que faltan por llenar</p>
                    </div>";
                echo $mensaje_error;
            }
        ?>
        <form action="./php/valida-consulta.php" method="POST" class="form">
            <div class="datos">
                <input type="text" name="nombre" placeholder="Nombre completo" class="nombre">
                <br>
                <input type="number" name="identificacion" placeholder="No de identificado" class="identificacion">
                <br>
                <input type="submit" value="Consultar" class="entrar">
            </div>
        </form>
    </div>
</body>
</html>