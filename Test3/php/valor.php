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
    
    for($i = 0; $i<20;$i++){
        $a = ($i+1)."a";
        $a1 = $respuestas[$i][0];
        $b = ($i+1)."b";
        $b1 = $respuestas[$i][1];
        $c = ($i+1)."c";
        $c1 = $respuestas[$i][2];
        $d = ($i+1)."d";
        $d1 = $respuestas[$i][3];
        $accion =  "UPDATE `test2` SET `$a` = '$a1' WHERE `test2`.`identificacion` = $id";
        $conexion->query($accion);
        $accion =  "UPDATE `test2` SET `$b` = '$b1' WHERE `test2`.`identificacion` = $id";
        $conexion->query($accion);
        $accion =  "UPDATE `test2` SET `$c` = '$c1' WHERE `test2`.`identificacion` = $id";
        $conexion->query($accion);
        $accion =  "UPDATE `test2` SET `$d` = '$d1' WHERE `test2`.`identificacion` = $id";
        $conexion->query($accion);
    }
    $moral = $respuestas[2][0]+$respuestas[3][3]+$respuestas[5][0]+$respuestas[7][1]+$respuestas[8][1]+$respuestas[11][1]+$respuestas[12][0]+$respuestas[14][3]+$respuestas[16][3]+$respuestas[18][0];
    $accion =  "UPDATE `test2` SET `moral` = '$moral' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $legalidad = $respuestas[2][1]+$respuestas[3][2]+$respuestas[5][1]+$respuestas[7][0]+$respuestas[8][0]+$respuestas[11][3]+$respuestas[12][1]+$respuestas[14][2]+$respuestas[16][1]+$respuestas[18][3];
    $accion =  "UPDATE `test2` SET `legalidad` = '$legalidad' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $indiferencia = $respuestas[2][2]+$respuestas[3][0]+$respuestas[5][3]+$respuestas[7][2]+$respuestas[8][3]+$respuestas[11][0]+$respuestas[12][2]+$respuestas[14][1]+$respuestas[16][0]+$respuestas[18][1];
    $accion =  "UPDATE `test2` SET `indiferencia` = '$indiferencia' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $corrupto = $respuestas[2][3]+$respuestas[3][1]+$respuestas[5][2]+$respuestas[7][3]+$respuestas[8][2]+$respuestas[11][2]+$respuestas[12][3]+$respuestas[14][0]+$respuestas[16][2]+$respuestas[18][2];
    $accion =  "UPDATE `test2` SET `corrupto` = '$corrupto' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $economico = $respuestas[0][2]+$respuestas[1][2]+$respuestas[4][3]+$respuestas[6][1]+$respuestas[9][0]+$respuestas[10][0]+$respuestas[13][0]+$respuestas[15][0]+$respuestas[17][1]+$respuestas[19][0];
    $accion =  "UPDATE `test2` SET `economico` = '$economico' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $politico = $respuestas[0][1]+$respuestas[1][3]+$respuestas[4][1]+$respuestas[6][2]+$respuestas[9][1]+$respuestas[10][3]+$respuestas[13][3]+$respuestas[15][1]+$respuestas[17][2]+$respuestas[19][1];
    $accion =  "UPDATE `test2` SET `politico` = '$politico' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $social = $respuestas[0][0]+$respuestas[1][1]+$respuestas[4][0]+$respuestas[6][0]+$respuestas[9][3]+$respuestas[10][1]+$respuestas[13][2]+$respuestas[15][3]+$respuestas[17][3]+$respuestas[19][3];
    $accion =  "UPDATE `test2` SET `social` = '$social' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $religioso = $respuestas[0][3]+$respuestas[1][0]+$respuestas[4][2]+$respuestas[6][3]+$respuestas[9][2]+$respuestas[10][2]+$respuestas[13][1]+$respuestas[15][2]+$respuestas[17][0]+$respuestas[19][2];
    $accion =  "UPDATE `test2` SET `religioso` = '$religioso' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $valores = $moral + $legalidad + $indiferencia + $corrupto;
    $accion =  "UPDATE `test2` SET `valores` = '$valores' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $interes = $economico + $politico + $social + $religioso;
    $accion =  "UPDATE `test2` SET `interes` = '$interes' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);

    $accion =  "UPDATE `test2` SET `contestado` = '1' WHERE `test2`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../../lobby.html');
?>