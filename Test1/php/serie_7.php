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
    $puntaje = 0;
    if($respuestas[0]=='A') $puntaje++;
    if($respuestas[1]=='A') $puntaje++;
    if($respuestas[2]=='C') $puntaje++;
    if($respuestas[3]=='B') $puntaje++;
    if($respuestas[4]=='B') $puntaje++;
    if($respuestas[5]=='D') $puntaje++;
    if($respuestas[6]=='C') $puntaje++;
    if($respuestas[7]=='A') $puntaje++;
    if($respuestas[8]=='A') $puntaje++;
    if($respuestas[9]=='D') $puntaje++;
    if($respuestas[10]=='B') $puntaje++;
    if($respuestas[11]=='C') $puntaje++;
    if($respuestas[12]=='B') $puntaje++;
    if($respuestas[13]=='C') $puntaje++;
    if($respuestas[14]=='C') $puntaje++;
    if($respuestas[15]=='C') $puntaje++;
    if($respuestas[16]=='B') $puntaje++;
    if($respuestas[17]=='C') $puntaje++;
    if($respuestas[18]=='C') $puntaje++;
    if($respuestas[19]=='C') $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje7` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 4)) $rango = "Deficiente";
    if(($puntaje == 5)) $rango = "Inferior";
    if(($puntaje >= 6) && ($puntaje <= 8)) $rango = "Term. M.B.";
    if(($puntaje >= 9) && ($puntaje <= 15)) $rango = "Term. Medio";
    if(($puntaje >= 16) && ($puntaje <= 17)) $rango = "Term. M.A.";
    if(($puntaje == 18)) $rango = "Superior";
    if(($puntaje >= 19) && ($puntaje <= 20)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res7` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 20;
    $accion =  "UPDATE `test1` SET `serie7` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_8.html');
?>