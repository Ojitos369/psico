<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<12;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }
    $puntaje = 0;
    if(($respuestas[0][0]==2) && ($respuestas[0][1]==1)) $puntaje++;
    if(($respuestas[1][0]==33) && ($respuestas[1][1]==38)) $puntaje++;
    if(($respuestas[2][0]==64) && ($respuestas[2][1]==128)) $puntaje++;
    if(($respuestas[3][0]==2) && ($respuestas[3][1]==2)) $puntaje++;
    if(($respuestas[4][0]==13) && ($respuestas[4][1]==13.25)) $puntaje++;
    if(($respuestas[5][0]==20) && ($respuestas[5][1]==21)) $puntaje++;
    if(($respuestas[6][0]==0.25) && ($respuestas[6][1]==0.125)) $puntaje++;
    if(($respuestas[7][0]==85.3) && ($respuestas[7][1]==94.3)) $puntaje++;
    if(($respuestas[8][0]==6) && ($respuestas[8][1]==8)) $puntaje++;
    if(($respuestas[9][0]==33) && ($respuestas[9][1]==34)) $puntaje++;
    if(($respuestas[10][0]==25) && ($respuestas[10][1]==125)) $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje10` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje *= 2;
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 4)) $rango = "Deficiente";
    if(($puntaje >= 5) && ($puntaje <= 7)) $rango = "Inferior";
    if(($puntaje >= 8) && ($puntaje <=9)) $rango = "Term. M.B.";
    if(($puntaje >= 10) && ($puntaje <= 11)) $rango = "Term. Medio";
    if(($puntaje >= 12) && ($puntaje <= 16)) $rango = "Term. M.A.";
    if(($puntaje >= 17) && ($puntaje <= 19)) $rango = "Superior";
    if(($puntaje >= 20) && ($puntaje <= 22)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res10` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 22;
    $accion =  "UPDATE `test1` SET `serie10` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $accion =  "UPDATE `test1` SET `contestado` = '1' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: valores.php');
?>