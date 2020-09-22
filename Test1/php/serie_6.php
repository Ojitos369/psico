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
    $puntaje = 20;
    if($respuestas[0]!='S') $puntaje-=2;
    if($respuestas[1]!='N') $puntaje-=2;
    if($respuestas[2]!='N') $puntaje-=2;
    if($respuestas[3]!='S') $puntaje-=2;
    if($respuestas[4]!='S') $puntaje-=2;
    if($respuestas[5]!='N') $puntaje-=2;
    if($respuestas[6]!='N') $puntaje-=2;
    if($respuestas[7]!='N') $puntaje-=2;
    if($respuestas[8]!='S') $puntaje-=2;
    if($respuestas[9]!='S') $puntaje-=2;
    if($respuestas[10]!='N') $puntaje-=2;
    if($respuestas[11]!='N') $puntaje-=2;
    if($respuestas[12]!='N') $puntaje-=2;
    if($respuestas[13]!='S') $puntaje-=2;
    if($respuestas[14]!='N') $puntaje-=2;
    if($respuestas[15]!='N') $puntaje-=2;
    if($respuestas[16]!='S') $puntaje-=2;
    if($respuestas[17]!='N') $puntaje-=2;
    if($respuestas[18]!='N') $puntaje-=2;
    if($respuestas[19]!='S') $puntaje-=2;
    if($puntaje < 0) $puntaje = 0;
    $accion =  "UPDATE `test1` SET `puntaje6` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 4)) $rango = "Deficiente";
    if(($puntaje >= 5) && ($puntaje <= 6)) $rango = "Inferior";
    if(($puntaje >= 7) && ($puntaje <= 8)) $rango = "Term. M.B.";
    if(($puntaje >= 9) && ($puntaje <= 14)) $rango = "Term. Medio";
    if(($puntaje >= 15) && ($puntaje <= 17)) $rango = "Term. M.A.";
    if(($puntaje >= 18) && ($puntaje <= 19)) $rango = "Superior";
    if(($puntaje == 20)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res6` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 20;
    $accion =  "UPDATE `test1` SET `serie6` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_7.html');
?>