<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<13;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }
    $puntaje = 0;
    if($respuestas[0]==20) $puntaje++;
    if($respuestas[1]==11) $puntaje++;
    if($respuestas[2]==50) $puntaje++;
    if($respuestas[3]==0.5) $puntaje++;
    if($respuestas[4]==12) $puntaje++;
    if($respuestas[5]==18) $puntaje++;
    if($respuestas[6]==500) $puntaje++;
    if($respuestas[7]==2) $puntaje++;
    if($respuestas[8]==28) $puntaje++;
    if($respuestas[9]==360) $puntaje++;
    if($respuestas[10]==12) $puntaje++;
    if($respuestas[11]==25) $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje5` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje *= 2;
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 4)) $rango = "Deficiente";
    if(($puntaje >= 5) && ($puntaje <= 6)) $rango = "Inferior";
    if(($puntaje >= 7) && ($puntaje <= 9)) $rango = "Term. M.B.";
    if(($puntaje >= 10) && ($puntaje <= 14)) $rango = "Term. Medio";
    if(($puntaje >= 15) && ($puntaje <= 20)) $rango = "Term. M.A.";
    if(($puntaje >= 21) && ($puntaje <= 23)) $rango = "Superior";
    if(($puntaje == 24)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res5` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 24;
    $accion =  "UPDATE `test1` SET `serie5` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_6.html');
?>