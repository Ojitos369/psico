<?php
    session_start();
    include("./php/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/segundo.css">
    <title>Prueba de Psicometria</title>
</head>
<body>
    <div class="encabezado"><a href="index.php"><img src="./media/logo.jpg" alt="logo" class="logo"></a></div>
    <div class="test-container">
        <a href="resultados1.php">
            <div class="test test-1">
                <div class="titulo">Consulta Test 1</div>
            </div>
        </a>
        <a href="resultados2.php">
            <div class="test test-2">
                <div class="titulo">Consulta Test 2</div>
            </div>
        </a>
        <a href="resultados3.php">
            <div class="test test-3">
                <div class="titulo">Consulta Test 3</div>
            </div>
        </a>
    </div>
    <div class="footer">
        <div class="contacto">
            <ul>
                <li>Telefono</li>
                <li>Correo</li>
                <li>Pagina</li>
            </ul>
        </div>
        <div class="contact-moderno">
            <ul>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Twitter</li>
            </ul>
        </div>
        <div class="empresa">
            <ul>
                <li>Nosotros</li>
                <li>Mision</li>
                <li>Vision</li>
            </ul>
        </div>
    </div>

    <?php
        if(isset($_GET['nocontestado1'])){
            $mensaje_error = "
                <script>
                    setTimeout(
                        function(){
                            alert('Esta persona aun no ha completado el test 1');
                        },100
                    )
                </script>";
            echo $mensaje_error;
        }
        if(isset($_GET['nocontestado2'])){
            $mensaje_error = "
                <script>
                    setTimeout(
                        function(){
                            alert('Esta persona aun no ha completado el test 2');
                        },100
                    )
                </script>";
            echo $mensaje_error;
        }
        if(isset($_GET['nocontestado3'])){
            $mensaje_error = "
                <script>
                    setTimeout(
                        function(){
                            alert('Esta persona aun no ha completado el test 3');
                        },100
                    )
                </script>";
            echo $mensaje_error;
        }
    ?>
<script src="./js/index.js"></script>
</body>
</html>