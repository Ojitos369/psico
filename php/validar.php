<?php
    session_start();
    ob_start();
    include("conexion.php");
    $nombre = $_POST['nombre'];
    $id = $_POST['identificacion'];
    $_SESSION['id'] = $id;
    if(!((strlen($nombre)>1)) || !($id > 0)){
        header('Location: ../index.php?error');
    }else{
        $aux=0;
        $sql = "SELECT * FROM $serie1 WHERE identificacion = $id";
        $resultado = mysqli_query($conexion,$sql);
        $consulta = mysqli_fetch_array($resultado);
        if($consulta['identificacion'] == $id){
            $aux++;
        }
        if($aux == 0){
            $conexion->query("INSERT INTO $serie1 (nombre, identificacion) VALUES ('$nombre','$id')");
            $conexion->query("INSERT INTO $serie2 (nombre, identificacion) VALUES ('$nombre','$id')");
            header('Location: ../lobby.html');
        }else{
            $sql = "SELECT * FROM $serie1 WHERE identificacion = $id";
            $resultado = mysqli_query($conexion,$sql);
            $consulta = mysqli_fetch_array($resultado);
            if($consulta['nombre'] == $nombre){
                header('Location: ../lobby.html');
            }else{
                header('Location: ../index.php?error');
            }
        }
    }
    mysqli_close($conexion);
?>