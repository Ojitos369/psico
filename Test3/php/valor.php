<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<21;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }

    $accion =  "UPDATE `test2` SET `contestado` = '1' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../../lobby.html');
?>