<?php
    session_start();
    include("./php/conexion.php");
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM $serie3 WHERE identificacion = $id";
    $resultado = mysqli_query($conexion,$sq3);
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
    <link rel="stylesheet" href="./css/resultados3.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Resultados</title>
</head>
<body>
<div class="encabezado"><a href="index.php"><img src="./media/logo.jpg" alt="logo" class="logo"></a></div>

    <div class="container-grafica">
        <div id="grafica"></div>
    </div>

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
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>

<tr>  
<td><strong>Receptividad</strong></td>
  <td><strong>R</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>

<tr>  
<td><strong>Agresividad</strong></td>
  <td><strong>R</strong></td>
  <td><strong>8</strong></td>
  <td><strong>2</strong></td>
</tr>

<tr>  
<td><strong>Comprensividad</strong></td>
  <td><strong>I</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>

<tr>  
<td><strong>Adaptabilidad</strong></td>
  <td><strong>II</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    
    
<tr>

<td><strong><!-- ojos locos --></strong></td>
  <td><strong>III</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    

<tr>  
<td><strong><!-- ojos drogados --></strong></td>
  <td><strong>IV</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    
    
<tr>  
<td><strong><!-- ojos cansados --></strong></td>
  <td><strong>V</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    

<tr>  
<td><strong><!-- dale ojos --></strong></td>
  <td><strong>VI</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    

<tr>  
<td><strong><!-- ojos chinos XD --></strong></td>
  <td><strong>VII</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>   

<tr>  
<td><strong><!-- ojos cabrone -->s</strong></td>
  <td><strong>VIII</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    
    
<tr>  
<td><strong><!-- ojos malditos --></strong></td>
  <td><strong>IX</strong></td>
  <td><strong>0</strong></td>
  <td><strong>1</strong></td>
</tr>    
    
    
    
    
    
    
    
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
        paper_bgcolor: "linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(255,233,0,1) 100%)",
        yaxis: {
            rangemode: "tozero"
        }

    }
    Plotly.newPlot("grafica",data,layout);
</script>
<?php mysqli_close($conexion); ?>
</body>
</html>