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
    if($respuestas[0]=='C') $puntaje++;
    if($respuestas[1]=='A') $puntaje++;
    if($respuestas[2]=='B') $puntaje++;
    if($respuestas[3]=='C') $puntaje++;
    if($respuestas[4]=='C') $puntaje++;
    if($respuestas[5]=='B') $puntaje++;
    if($respuestas[6]=='C') $puntaje++;
    if($respuestas[7]=='C') $puntaje++;
    if($respuestas[8]=='B') $puntaje++;
    if($respuestas[9]=='A') $puntaje++;
    if($respuestas[10]=='B') $puntaje++;
    $accion =  "UPDATE `test1` SET `puntaje2` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje *= 2;
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 6)) $rango = "Deficiente";
    if(($puntaje == 8)) $rango = "Inferior";
    if(($puntaje == 10)) $rango = "Term. M.B.";
    if(($puntaje >= 12) && ($puntaje <= 16)) $rango = "Term. Medio";
    if(($puntaje == 18)) $rango = "Term. M.A.";
    if(($puntaje == 20)) $rango = "Superior";
    if(($puntaje == 22)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res2` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 22;
    $accion =  "UPDATE `test1` SET `serie2` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_3.html');
?>