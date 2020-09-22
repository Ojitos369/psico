<?php
session_start();
ob_start();
include("conexion.php");
$nombre = $_POST['nombre'];
$id = $_POST['identificacion'];
$_SESSION['id'] = $id;
if(!((strlen($nombre)>1)) || !($id > 0)){
    header('Location: ../consulta.php?error');
}
$sql = "SELECT * FROM $serie1 WHERE identificacion = $id";
$resultado = mysqli_query($conexion,$sql);
$consulta = mysqli_fetch_array($resultado);
if($consulta['nombre'] != $nombre){
    header('Location: ../consulta.php?error');
}else{
    header('Location: ../lobby-consulta.php');
}
?>