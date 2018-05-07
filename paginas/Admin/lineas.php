<?php
session_start();
if(isset($_SESSION['usuario'])){
       if($_SESSION['usuario'][2] == 'rango1'){
        header('Location: ../Escaner/');
      }else if($_SESSION['usuario'][2] == 'rango2'){
        header('Location: ../Registro/');
      }else if($_SESSION['usuario'][2] != 'admin'){
        header('Location: ../../');
      }
    }else{
      header('Location: ../../');
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/reporte.css">
    <title>Document</title>
</head>
<body>
    <section>
     <header>
         <img src="../../img/login1.jpg" alt="" height="100px"/>
        <nav>
            <a href="index.php" id="atras">Atras</a>
        </nav>
     </header>
 <div id="cuerpo">
     <div id="imagenytitulo">
       <img src="../../img/login1.jpg" alt="">
     </div>
     <div id="grafico-2" class="grafico">
     <h2>Grafico de Barras</h2>
     </div>
     <div id="tablagrafico">
       <h2>Tabla de valores</h2>
       <table id="tabladinamica" border="1">
       </table>
     </div>
     <div id="parrafos">
       
     </div>
     </div>
     </div>
    </div>
    <textarea name="" id="cargador_de_texto" cols="150" rows="5"  placeholder="Agregue el texto pertinente  al  reporte"></textarea>
       <div id="botonesReporte">
       <input type="button" value="Agregar texto" id="agregartexto">
       <input type="button" value="Agregar titulo" id="agregartitulo">
       <input type="button" value="Ocultar">
       </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>  
<script src="../../js/menu.js"></script>
<script src="../../js/validador.js"></script>      
<script src="../../js/reportes.js"></script>   
<script src="../../js/code/highcharts.js"></script>
<script src="../../js/code/highcharts-3d.js"></script>
<script src="../../js/code/modules/exporting.js"></script>
<script src="../../js/grafico2.js"></script>
</body>
</html>