<?php session_start(); ?>
<?php
    include("conexion.php");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `test1` WHERE identificacion = $id";
    $resultado = mysqli_query($conexion,$sql);
    $consulta = mysqli_fetch_array($resultado);
    $puntaje = 0;
    for($i=1;$i<11;$i++){
        $puntaje += $consulta['puntaje'.$i];
    }
    $valores = array();
    array_push($valores,1,41,42,43,43,44,44,45,46,46,47,47,48,49,49,50,50,51,52,52,53,53,54,55,55,56,56,57,58,58,59,59,60,61,61,62,62,63,64,64,65,65,66,67,67,68,68,69,70,70,71,71,72,73,73,74,80,80,80,81,81,82,82,82,83,83,84,84,84,84,85,85,86,86,86,87,88,88,88,89,89,89,90,90,90,90,91,91,91,92,92,92,93,93,94,95,95,95,95,95,96,96,96,97,97,97,98,98,99,99,99,99,100,101,101,102,102,103,104,104,102,102,102,103,103,103,103,104,104,104,104,105,105,105,105,106,106,106,107,107,107,107,108,108,108,109,109,109,110,110,110,111,111,111,111,112,113,113,113,114,114,114,115,115,116,116,117,117,117,118,118,118,119,120,120);
    $ci = $valores[$puntaje];
    $accion =  "UPDATE `test1` SET `CI` = '$ci' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    $rango="";
    if(($ci >= 0) && ($ci <= 61)) $rango = "Inferior";
    if(($ci >= 62) && ($ci <= 79)) $rango = "Inferior T. Medio";
    if(($ci >= 80) && ($ci <= 110)) $rango = "Term. Medio";
    if(($ci >= 111) && ($ci <= 119)) $rango = "Superior";
    if(($ci == 120)) $rango = "Genio";
    $accion =  "UPDATE `test1` SET `rango` = '$rango' WHERE `test1`.`identificacion` = $id";
    $conexion->query($accion);
    mysqli_close($conexion);
    header('Location: ../../lobby.html');
?>