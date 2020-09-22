<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("conexion.php");
    $sql = "SELECT * FROM $preguntas3";
    $resultado = mysqli_query($conexion,$sql);
?>
    <?php while($consulta = mysqli_fetch_array($resultado)){ ?>
        <p><?php echo $consulta['numero'];?></p><br>
    <?php } ?>
</body>
</html>
