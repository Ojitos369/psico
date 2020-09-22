<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<11;$i++){
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
    $puntaje = $puntaje * 100 / 11;
    echo $puntaje.'<br>';
    echo $id.'<br>';
    print_r($respuestas);
    $accion =  "UPDATE `test1` SET `serie2` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_3.html');
?>