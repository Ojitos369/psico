<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $respuestas = array();
    error_reporting(E_ALL ^ E_NOTICE);
    for($i = 1; $i<30;$i++){
        $temp = $_POST['respuesta'.$i];
        array_push($respuestas, $temp);
    }
    $puntaje = 0;
    if($respuestas[0]=='O') $puntaje++;
    if($respuestas[1]=='I') $puntaje++;
    if($respuestas[2]=='O') $puntaje++;
    if($respuestas[3]=='O') $puntaje++;
    if($respuestas[4]=='O') $puntaje++;
    if($respuestas[5]=='O') $puntaje++;
    if($respuestas[6]=='I') $puntaje++;
    if($respuestas[7]=='I') $puntaje++;
    if($respuestas[8]=='O') $puntaje++;
    if($respuestas[9]=='I') $puntaje++;
    if($respuestas[10]=='O') $puntaje++;
    if($respuestas[11]=='O') $puntaje++;
    if($respuestas[12]=='O') $puntaje++;
    if($respuestas[13]=='I') $puntaje++;
    if($respuestas[14]=='O') $puntaje++;
    if($respuestas[15]=='O') $puntaje++;
    if($respuestas[16]=='I') $puntaje++;
    if($respuestas[17]=='O') $puntaje++;
    if($respuestas[18]=='I') $puntaje++;
    if($respuestas[19]=='O') $puntaje++;
    if($respuestas[20]=='O') $puntaje++;
    if($respuestas[21]=='O') $puntaje++;
    if($respuestas[22]=='I') $puntaje++;
    if($respuestas[23]=='I') $puntaje++;
    if($respuestas[24]=='I') $puntaje++;
    if($respuestas[25]=='O') $puntaje++;
    if($respuestas[26]=='I') $puntaje++;
    if($respuestas[27]=='O') $puntaje++;
    if($respuestas[28]=='O') $puntaje++;
    if($respuestas[29]=='I') $puntaje++;
    $puntaje = $puntaje * 100 / 30;
    echo $puntaje.'<br>';
    echo $id.'<br>';
    print_r($respuestas);
    $accion =  "UPDATE `test1` SET `serie3` = '$puntaje' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../serie_4.html');
?>