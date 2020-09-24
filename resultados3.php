<?php
    session_start();
    include("./php/conexion.php");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM $serie3 WHERE identificacion = $id";
    $resultado = mysqli_query($conexion,$sql);
    $consulta = mysqli_fetch_array($resultado);
    if($consulta['contestado'] == 0){
        header('Location: lobby-consulta.php?nocontestado3');//conectar esto
    }
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
                    <td><strong>Descripcion</strong></td>
                    <td><strong>Escala</strong></td>
                    <td><strong>PD</strong></td>
                    <td><strong>PT</strong></td>
                </tr>

                <tr>
                    <td><strong>Disposicion general de la venta</strong></td>
                    <td><strong>DGV</strong></td>
                    <td><strong><?= $consulta['dgv']; ?></strong></td>
                    <td><strong><?= $consulta['ptdgv']; ?></strong></td>
                </tr>

                <tr>
                    <td><strong>Receptividad</strong></td>
                    <td><strong>R</strong></td>
                    <td><strong><?= $consulta['r']; ?></strong></td>
                    <td><strong><?= $consulta['ptr']; ?></strong></td>
                </tr>

                <tr>
                    <td><strong>Agresividad</strong></td>
                    <td><strong>A</strong></td>
                    <td><strong><?= $consulta['a']; ?></strong></td>
                    <td><strong><?= $consulta['pta']; ?></strong></td>
                </tr>

                <tr>
                <td><strong>Comprensividad</strong></td>
                    <td><strong>I</strong></td>
                    <td><strong><?= $consulta['uno']; ?></strong></td>
                    <td><strong><?= $consulta['pt1']; ?></strong></td>
                </tr>

                <tr>
                    <td><strong>Adaptabilidad</strong></td>
                    <td><strong>II</strong></td>
                    <td><strong><?= $consulta['dos']; ?></strong></td>
                    <td><strong><?= $consulta['pt2']; ?></strong></td>
                </tr>
                    
                <tr>
                    <td><strong><!-- ojos locos --></strong></td>
                    <td><strong>III</strong></td>
                    <td><strong><?= $consulta['tres']; ?></strong></td>
                    <td><strong><?= $consulta['pt3']; ?></strong></td>
                </tr>

                <tr>
                <td><strong><!-- ojos drogados --></strong></td>
                    <td><strong>IV</strong></td>
                    <td><strong><?= $consulta['cuatro']; ?></strong></td>
                    <td><strong><?= $consulta['pt4']; ?></strong></td>
                </tr>
                    
                <tr>
                <td><strong><!-- ojos cansados --></strong></td>
                    <td><strong>V</strong></td>
                    <td><strong><?= $consulta['cinco']; ?></strong></td>
                    <td><strong><?= $consulta['pt5']; ?></strong></td>
                </tr>

                <tr>
                <td><strong><!-- dale ojos --></strong></td>
                    <td><strong>VI</strong></td>
                    <td><strong><?= $consulta['seis']; ?></strong></td>
                    <td><strong><?= $consulta['pt6']; ?></strong></td>
                </tr>

                <tr>  
                <td><strong><!-- ojos chinos XD --></strong></td>
                    <td><strong>VII</strong></td>
                    <td><strong><?= $consulta['siete']; ?></strong></td>
                    <td><strong><?= $consulta['pt7']; ?></strong></td>
                </tr>

                <tr>
                <td><strong><!-- ojos cabrones --></strong></td>
                    <td><strong>VIII</strong></td>
                    <td><strong><?= $consulta['ocho']; ?></strong></td>
                    <td><strong><?= $consulta['pt8']; ?></strong></td>
                </tr>
                    
                <tr>
                <td><strong><!-- ojos malditos --></strong></td>
                    <td><strong>IX</strong></td>
                    <td><strong><?= $consulta['nueve']; ?></strong></td>
                    <td><strong><?= $consulta['pt9']; ?></strong></td>
                </tr>
            </table>
        </div>
    </div>

<script>
    var etiquetas = ['DGV','R','A','I','II','III','IV','V','VI','VII','VIII','IX'];
    var datos = [
        <?php
            echo $consulta['ptdgv'].',';
            echo $consulta['ptr'].',';
            echo $consulta['pta'].',';
            for($i=1;$i<10;$i++){
                $pt = "pt".$i;
                echo $consulta[$pt].',';
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