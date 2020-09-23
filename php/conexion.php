<?php 
$usuario = "asiracor_root";
$contrasena = "asiratoor";
$servidor = "localhost";
$basededatos = "asiracor_psicometria";

$serie1 = "test1";
$serie2 = "test2";
$serie3 = "test3";
$preguntas3 = "preguntas3";


$conexion = new mysqli($servidor, $usuario, $contrasena,$basededatos);
if($conexion->connect_errno){
    echo $conexion->connect_errno;
    exit();
}
mysqli_set_charset($conexion,'utf8');
/* $db = mysqli_select_db( $conexion, $basededatos); */

?>