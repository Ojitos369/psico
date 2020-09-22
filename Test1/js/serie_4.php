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
    $puntaje = 0;
    if(($respuestas[0][0]=='B') || ($respuestas[0][0]=='E')) $puntaje++;
    if(($respuestas[1][0]=='A') || ($respuestas[1][0]=='C')) $puntaje++;
    if(($respuestas[2][0]=='C') || ($respuestas[2][0]=='D')) $puntaje++;
    if(($respuestas[3][0]=='A') || ($respuestas[3][0]=='C')) $puntaje++;
    if(($respuestas[4][0]=='B') || ($respuestas[4][0]=='E')) $puntaje++;
    if(($respuestas[5][0]=='C') || ($respuestas[5][0]=='E')) $puntaje++;
    if(($respuestas[6][0]=='B') || ($respuestas[6][0]=='E')) $puntaje++;
    if(($respuestas[7][0]=='B') || ($respuestas[7][0]=='E')) $puntaje++;
    if(($respuestas[8][0]=='A') || ($respuestas[8][0]=='B')) $puntaje++;
    if(($respuestas[9][0]=='A') || ($respuestas[9][0]=='C')) $puntaje++;
    if(($respuestas[10][0]=='B') || ($respuestas[10][0]=='C')) $puntaje++;
    if(($respuestas[11][0]=='A') || ($respuestas[11][0]=='B')) $puntaje++;
    if(($respuestas[12][0]=='C') || ($respuestas[12][0]=='E')) $puntaje++;
    if(($respuestas[13][0]=='A') || ($respuestas[13][0]=='D')) $puntaje++;
    if(($respuestas[14][0]=='A') || ($respuestas[14][0]=='B')) $puntaje++;
    if(($respuestas[15][0]=='B') || ($respuestas[15][0]=='E')) $puntaje++;
    if(($respuestas[16][0]=='A') || ($respuestas[16][0]=='B')) $puntaje++;
    if(($respuestas[17][0]=='C') || ($respuestas[17][0]=='D')) $puntaje++;

    if(($respuestas[0][1]=='B') || ($respuestas[0][1]=='E')) $puntaje++;
    if(($respuestas[1][1]=='A') || ($respuestas[1][1]=='C')) $puntaje++;
    if(($respuestas[2][1]=='C') || ($respuestas[2][1]=='D')) $puntaje++;
    if(($respuestas[3][1]=='A') || ($respuestas[3][1]=='C')) $puntaje++;
    if(($respuestas[4][1]=='B') || ($respuestas[4][1]=='E')) $puntaje++;
    if(($respuestas[5][1]=='C') || ($respuestas[5][1]=='E')) $puntaje++;
    if(($respuestas[6][1]=='B') || ($respuestas[6][1]=='E')) $puntaje++;
    if(($respuestas[7][1]=='B') || ($respuestas[7][1]=='E')) $puntaje++;
    if(($respuestas[8][1]=='A') || ($respuestas[8][1]=='B')) $puntaje++;
    if(($respuestas[9][1]=='A') || ($respuestas[9][1]=='C')) $puntaje++;
    if(($respuestas[10][1]=='B') || ($respuestas[10][1]=='C')) $puntaje++;
    if(($respuestas[11][1]=='A') || ($respuestas[11][1]=='B')) $puntaje++;
    if(($respuestas[12][1]=='C') || ($respuestas[12][1]=='E')) $puntaje++;
    if(($respuestas[13][1]=='A') || ($respuestas[13][1]=='D')) $puntaje++;
    if(($respuestas[14][1]=='A') || ($respuestas[14][1]=='B')) $puntaje++;
    if(($respuestas[15][1]=='B') || ($respuestas[15][1]=='E')) $puntaje++;
    if(($respuestas[16][1]=='A') || ($respuestas[16][1]=='B')) $puntaje++;
    if(($respuestas[17][1]=='C') || ($respuestas[17][1]=='D')) $puntaje++;
    $puntaje = $puntaje * 100 / 36;
    echo $puntaje.'<br>';
    echo $id.'<br>';
    print_r($respuestas);
    $accion =  "UPDATE `test1` SET `serie4` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_5.html');
?>