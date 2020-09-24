<?php
    session_start();
    include("./php/conexion.php");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM $serie2 WHERE identificacion = $id";
    $resultado = mysqli_query($conexion,$sql);
    $consulta = mysqli_fetch_array($resultado);
    if($consulta['contestado'] == 0){
        header('Location: lobby-consulta.php?nocontestado2');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/resultados2.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Resultados</title>
</head>
<body>
<div class="encabezado"><a href="index.php"><img src="./media/logo.jpg" alt="logo" class="logo"></a></div>

    <div class="container-grafica">
        <div id="grafica"></div>
    </div>

    <div class="tablas container-tabla-grande">

        <!-- Tabla de valores -->
        <div class="tabla">
            <table class="tabla">
                <tr>
                    <td colspan="9" class="titulo">Valores</td>
                </tr>
                <tr>
                    <td>Item</td>
                    <td colspan="2">Moral</td>
                    <td colspan="2">Legalidad</td>
                    <td colspan="2">Indiferencia</td>
                    <td colspan="2">Corrupto</td>
                </tr>
                <tr>
                    <?php $num = 3; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                </tr>
                <tr>
                    <?php $num = 4; ?>
                    <td><?= $num; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                </tr>
                <tr>
                    <?php $num = 6; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 8; ?>
                    <td><?= $num; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                </tr>
                <tr>
                    <?php $num = 9; ?>
                    <td><?= $num; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 12; ?>
                    <td><?= $num; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 13; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                </tr>
                <tr>
                    <?php $num = 15; ?>
                    <td><?= $num; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                </tr>
                <tr>
                    <?php $num = 17; ?>
                    <td><?= $num; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 19; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><?= $consulta['moral']; ?></td>
                    <td></td>
                    <td><?= $consulta['legalidad']; ?></td>
                    <td></td>
                    <td><?= $consulta['indiferencia']; ?></td>
                    <td></td>
                    <td><?= $consulta['corrupto']; ?></td>
                </tr>
                <tr>
                    <td>Total Valores</td>
                    <td colspan="7"></td>
                    <td><?= $consulta['valores']; ?></td>
                </tr>
            </table>
        </div>
        <!-- Tabla de Intereses -->
        <div class="tabla">
            <table class="tabla">
                <tr>
                    <td colspan="9" class="titulo">Intereses</td>
                </tr>
                <tr>
                    <td>Item</td>
                    <td colspan="2">Economico</td>
                    <td colspan="2">Politico</td>
                    <td colspan="2">Social</td>
                    <td colspan="2">Religioso</td>
                </tr>
                <tr>
                    <?php $num = 1; ?>
                    <td><?= $num; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                </tr>
                <tr>
                    <?php $num = 2; ?>
                    <td><?= $num; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                </tr>
                <tr>
                    <?php $num = 5; ?>
                    <td><?= $num; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 7; ?>
                    <td><?= $num; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                </tr>
                <tr>
                    <?php $num = 10; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 11; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 14; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                </tr>
                <tr>
                    <?php $num = 16; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <?php $num = 18; ?>
                    <td><?= $num; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                </tr>
                <tr>
                    <?php $num = 20; ?>
                    <td><?= $num; ?></td>
                    <td>A</td>
                    <td><?= $consulta[$num.'a']; ?></td>
                    <td>B</td>
                    <td><?= $consulta[$num.'b']; ?></td>
                    <td>D</td>
                    <td><?= $consulta[$num.'d']; ?></td>
                    <td>C</td>
                    <td><?= $consulta[$num.'c']; ?></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><?= $consulta['economico']; ?></td>
                    <td></td>
                    <td><?= $consulta['politico']; ?></td>
                    <td></td>
                    <td><?= $consulta['social']; ?></td>
                    <td></td>
                    <td><?= $consulta['religioso']; ?></td>
                </tr>
                <tr>
                    <td>Total Intereses</td>
                    <td colspan="7"></td>
                    <td><?= $consulta['interes']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>

<script>
    var etiquetas = ['Moral','Legalidad','Indiferencia','Corrupto','Economico','Politico','Social','Religioso'];
    var datos = [
        <?php
            echo $consulta['moral'].',';
            echo $consulta['legalidad'].',';
            echo $consulta['indiferencia'].',';
            echo $consulta['corrupto'].',';
            echo $consulta['economico'].',';
            echo $consulta['politico'].',';
            echo $consulta['social'].',';
            echo $consulta['religioso'].',';
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