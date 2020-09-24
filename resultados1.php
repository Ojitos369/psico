<?php
    session_start();
    include("./php/conexion.php");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM $serie1 WHERE identificacion = $id";
    $resultado = mysqli_query($conexion,$sql);
    $consulta = mysqli_fetch_array($resultado);
    if($consulta['contestado'] == 0){
        header('Location: lobby-consulta.php?nocontestado1');
    }
    $puntuaciones = array();
    for($i=0;$i<10;$i++){
        array_push($puntuaciones,$consulta['serie'.($i+1)]);
    }
    $etiquetas = ['Informacion','Juicio','Vocabulario','Sintesis','Concentracion','Analisis','Abstraccion','Planeacion','Organizacion','Atencion'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/resultados.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Resultados</title>
</head>
<body>
<div class="encabezado"><a href="index.php"><img src="./media/logo.jpg" alt="logo" class="logo"></a></div>

    <div class="container-grafica">
        <div id="grafica"></div>
    </div>

    <div class="tablas">
        <div class="container-tabla-grande">
            <table>
                <tr>
                    <td>Serie</td>
                    <td>Categoria</td>
                    <td>Puntuacion</td>
                    <td>Rango</td>
                </tr>
                <?php
                    for($i=0;$i<10;$i++){
                        echo '<tr>';
                        echo '<td class="tabla-center">'.($i+1).'</td>';
                        echo '<td>'.$etiquetas[$i].'</td>';
                        echo '<td class="tabla-center">'.$puntuaciones[$i].'</td>';
                        echo '<td>'.$consulta['res'.($i+1)].'</td>';
                    }
                ?>
            </table>
        </div>
        <div class="container-tabla-chica">
            <table>
                <tr>
                    <td>Puntos Totales</td>
                    <td></td>
                    <?php
                        $puntaje = 0;
                        for($i=1;$i<11;$i++){
                            $puntaje += $consulta['puntaje'.$i];
                        }
                    ?>
                    <td><?= $puntaje; ?></td>
                </tr>
                <tr>
                    <td>Rango</td>
                    <td></td>
                    <td><?= $consulta['Rango']; ?></td>
                </tr>
                <tr>
                    <td>C.I.</td>
                    <td></td>
                    <td><?= $consulta['CI']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>

<script>
    var etiquetas = ['Informacion','Juicio','Vocabulario','Sintesis','Concentracion','Analisis','Abstraccion','Planeacion','Organizacion','Atencion'];
    var datos = [
        <?php
            for($i=0;$i<10;$i++){
                echo $puntuaciones[$i].',';
            }
        ?>
    ]
    var data =[{
        x: etiquetas,
        y: datos,
        type: "linear",
        line: {
            shape: "spline",
            color: "#fff"
        }
    }]
    var layout = {
        font: {
            color: "000"
        },
        plot_bgcolor: "#0000",
        paper_bgcolor: "linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%)",
        yaxis: {
            rangemode: "tozero"
        }

    }
    Plotly.newPlot("grafica",data,layout);
</script>
<?php mysqli_close($conexion); ?>
</body>
</html>