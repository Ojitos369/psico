<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<17;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }
    $puntaje = 0;
    if($respuestas[0]=='B') $puntaje++;
    if($respuestas[1]=='A') $puntaje++;
    if($respuestas[2]=='B') $puntaje++;
    if($respuestas[3]=='A') $puntaje++;
    if($respuestas[4]=='B') $puntaje++;
    if($respuestas[5]=='D') $puntaje++;
    if($respuestas[6]=='C') $puntaje++;
    if($respuestas[7]=='A') $puntaje++;
    if($respuestas[8]=='C') $puntaje++;
    if($respuestas[9]=='C') $puntaje++;
    if($respuestas[10]=='C') $puntaje++;
    if($respuestas[11]=='B') $puntaje++;
    if($respuestas[12]=='B') $puntaje++;
    if($respuestas[13]=='C') $puntaje++;
    if($respuestas[14]=='A') $puntaje++;
    if($respuestas[15]=='C') $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje1` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 7)) $rango = "Deficiente";
    if(($puntaje >= 8) && ($puntaje <= 9)) $rango = "Inferior";
    if(($puntaje >= 10) && ($puntaje <= 11)) $rango = "Term. M.B.";
    if(($puntaje >= 12) && ($puntaje <= 13)) $rango = "Term. Medio";
    if(($puntaje == 14)) $rango = "Term. M.A.";
    if(($puntaje == 15)) $rango = "Superior";
    if(($puntaje == 16)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res1` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 16;
    $accion =  "UPDATE `test1` SET `serie1` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_2.html');
?>