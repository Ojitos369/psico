<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<18;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }
    $puntaje = 17;
    if($respuestas[0]!='V') $puntaje-=2;
    if($respuestas[1]!='F') $puntaje-=2;
    if($respuestas[2]!='V') $puntaje-=2;
    if($respuestas[3]!='V') $puntaje-=2;
    if($respuestas[4]!='V') $puntaje-=2;
    if($respuestas[5]!='F') $puntaje-=2;
    if($respuestas[6]!='F') $puntaje-=2;
    if($respuestas[7]!='V') $puntaje-=2;
    if($respuestas[8]!='V') $puntaje-=2;
    if($respuestas[9]!='F') $puntaje-=2;
    if($respuestas[10]!='F') $puntaje-=2;
    if($respuestas[11]!='F') $puntaje-=2;
    if($respuestas[12]!='V') $puntaje-=2;
    if($respuestas[13]!='V') $puntaje-=2;
    if($respuestas[14]!='V') $puntaje-=2;
    if($respuestas[15]!='V') $puntaje-=2;
    if($respuestas[16]!='F') $puntaje-=2;
    if($puntaje < 0) $puntaje = 0;
    $accion =  "UPDATE `test1` SET `puntaje8` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($puntaje >= 0) && ($puntaje <= 5)) $rango = "Deficiente";
    if(($puntaje == 6)) $rango = "Inferior";
    if(($puntaje == 7)) $rango = "Term. M.B.";
    if(($puntaje >= 8) && ($puntaje <= 12)) $rango = "Term. Medio";
    if(($puntaje >= 13) && ($puntaje <= 14)) $rango = "Term. M.A.";
    if(($puntaje >= 15) && ($puntaje <= 16)) $rango = "Superior";
    if(($puntaje == 17)) $rango = "Excelente";
    $accion =  "UPDATE `test1` SET `res8` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $puntaje = $puntaje * 100 / 17;
    $accion =  "UPDATE `test1` SET `serie8` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_9.html');
?>