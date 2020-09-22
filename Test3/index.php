<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/series.css">
    <title>Teste 3</title>
</head>
<body>
    <a href="../lobby.html"><div class="encabezado"><img src="./media/logo.jpg" alt="logo" class="logo"></div></a>
    <div>
        <div class="instrucciones">
            <h1>Instrucciones</h1>
            <p>
                Para cada una de los siguientes casos seleccione solo la opcion que considere correcta
            </p>
        </div>
        <br>
    </div>
    <hr>
    <?php
    include("./php/conexion.php");
    $sql = "SELECT * FROM $preguntas3";
    $resultado = mysqli_query($conexion,$sql);
    ?>
    <div class="container_form">
        <form name="formulario" id="formulario" class="form" method="POST" action="./php/serie_1.php">
        <?php while($consulta = mysqli_fetch_array($resultado)){ ?>
            <?php echo "<div class='pregunta p".$consulta['numero']."'>";?>
                <?php echo "<p class='pregunta_".$consulta['numero']." preguntaTexto'>".$consulta['pregunta']."</p>" ?>
                <?php echo "<input type='radio' value='A' name='respuesta".$consulta['numero']."'>".$consulta['texto2']."<br>"; ?>
                <?php echo "<input type='radio' value='B' name='respuesta".$consulta['numero']."'>".$consulta['texto3']."<br>"; ?>
                <?php echo "<input type='radio' value='C' name='respuesta".$consulta['numero']."'>".$consulta['texto4']."<br>"; ?>
                <br>
            </div>
        <?php } ?>
            <br>
            <div class="boton_envio">
                <input type="submit" id="envio" value="Envio" class="envio"" name="envio">
            </div>
            <br>
        </form>
    </div>
<?php mysqli_close($conexion); ?>
</body>
</html>