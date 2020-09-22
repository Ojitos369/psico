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
    if($respuestas[0]=='D') $puntaje++;
    if($respuestas[1]=='E') $puntaje++;
    if($respuestas[2]=='C') $puntaje++;
    if($respuestas[3]=='A') $puntaje++;
    if($respuestas[4]=='C') $puntaje++;
    if($respuestas[5]=='D') $puntaje++;
    if($respuestas[6]=='E') $puntaje++;
    if($respuestas[7]=='A') $puntaje++;
    if($respuestas[8]=='D') $puntaje++;
    if($respuestas[9]=='C') $puntaje++;
    if($respuestas[10]=='E') $puntaje++;
    if($respuestas[11]=='E') $puntaje++;
    if($respuestas[12]=='A') $puntaje++;
    if($respuestas[13]=='E') $puntaje++;
    if($respuestas[14]=='E') $puntaje++;
    if($respuestas[15]=='A') $puntaje++;
    if($respuestas[16]=='D') $puntaje++;
    if($respuestas[17]=='E') $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje9` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 6)) $rango = "Deficiente";
    if(($puntaje >= 7) && ($puntaje <= 8)) $rango = "Inferior";
    if(($puntaje == 9)) $rango = "Term. M.B.";
    if(($puntaje >= 10) && ($puntaje <= 14)) $rango = "Term. Medio";
    if(($puntaje >= 15) && ($puntaje <= 16)) $rango = "Term. M.A.";
    if(($puntaje == 17)) $rango = "Superior";
    if(($puntaje == 18)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res9` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 18;
    $accion =  "UPDATE `test1` SET `serie9` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_10.html');
?>