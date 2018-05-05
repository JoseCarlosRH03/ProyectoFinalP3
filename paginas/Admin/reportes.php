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
     <div id="buscador">
         <form action="">
            <select name="cars">
                <option value="nombre">Nombre</option>
                <option value="cedula">Cedula</option>
                <option value="placa">Placa</option>
                <option value="Matricula">Matricula</option>
            </select>
            <input type="text"  placeholder="dato correspondiente" id=inputtext>
            <input type="button" value="Generar" id="generador">
            <p>Selecciones el metodo de busqueda y complete el campo</p>
         </form> 
     </div>
    </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>  
<script src="../../js/menu.js"></script>
<script src="../../js/validador.js"></script>      
</body>
</html>