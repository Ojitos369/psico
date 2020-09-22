<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<19;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }
    $puntaje = 0;
    if(($respuestas[0][0]=='B') && ($respuestas[0][1]=='E')) $puntaje++;
    if(($respuestas[1][0]=='A') && ($respuestas[1][1]=='C')) $puntaje++;
    if(($respuestas[2][0]=='C') && ($respuestas[2][1]=='D')) $puntaje++;
    if(($respuestas[3][0]=='A') && ($respuestas[3][1]=='C')) $puntaje++;
    if(($respuestas[4][0]=='B') && ($respuestas[4][1]=='E')) $puntaje++;
    if(($respuestas[5][0]=='C') && ($respuestas[5][1]=='E')) $puntaje++;
    if(($respuestas[6][0]=='B') && ($respuestas[6][1]=='E')) $puntaje++;
    if(($respuestas[7][0]=='B') && ($respuestas[7][1]=='E')) $puntaje++;
    if(($respuestas[8][0]=='A') && ($respuestas[8][1]=='B')) $puntaje++;
    if(($respuestas[9][0]=='A') && ($respuestas[9][1]=='C')) $puntaje++;
    if(($respuestas[10][0]=='B') && ($respuestas[10][1]=='C')) $puntaje++;
    if(($respuestas[11][0]=='A') && ($respuestas[11][1]=='B')) $puntaje++;
    if(($respuestas[12][0]=='C') && ($respuestas[12][1]=='E')) $puntaje++;
    if(($respuestas[13][0]=='A') && ($respuestas[13][1]=='D')) $puntaje++;
    if(($respuestas[14][0]=='A') && ($respuestas[14][1]=='B')) $puntaje++;
    if(($respuestas[15][0]=='B') && ($respuestas[15][1]=='E')) $puntaje++;
    if(($respuestas[16][0]=='A') && ($respuestas[16][1]=='B')) $puntaje++;
    if(($respuestas[17][0]=='C') && ($respuestas[17][1]=='D')) $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje4` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 5)) $rango = "Deficiente";
    if(($puntaje == 6)) $rango = "Inferior";
    if(($puntaje >= 7) && ($puntaje <= 9)) $rango = "Term. M.B.";
    if(($puntaje >= 10) && ($puntaje <= 13)) $rango = "Term. Medio";
    if(($puntaje >= 14)  && ($puntaje <= 15)) $rango = "Term. M.A.";
    if(($puntaje >= 16) && ($puntaje <= 17)) $rango = "Superior";
    if(($puntaje == 18)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res4` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 18;
    $accion =  "UPDATE `test1` SET `serie4` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_5.html');
?>