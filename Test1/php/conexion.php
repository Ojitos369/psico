<?php 
$usuario = "asiracor_root";
$contrasena = "asiratoor";
$servidor = "localhost";
$basededatos = "asiracor_psicometria";

$test = "test1";


$conexion = new mysqli($servidor, $usuario, $contrasena,$basededatos);
if($conexion->connect_errno){
    echo $conexion->connect_errno;
    exit();
}
mysqli_set_charset($conexion,'utf8');
/* $db = mysqli_select_db( $conexion, $basededatos); */

?>