<?php
session_start();
if(isset($_SESSION['usuario'])){
      if($_SESSION['usuario'][2] == 'admin'){
        header("location: ../Admin/");
      }else if($_SESSION['usuario'][2] == 'rango1'){
        header('Location: ../Escaner/');
      }else if($_SESSION['usuario'][2] != 'rango2'){
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
    <link rel="stylesheet" href="../../css/registro.css">
    <title>Document</title>
</head>
<body>
    <section>
     <header>
         <img src="../../img/logo-uasd_cambio4.jpg" alt="" height="100px"/>
        <nav>
            <a href="#">Datos Personales</a>
            <a href="#">Datos del Vehiculo</a>
            <a href="#">Perfil Completo</a>
        </nav>
     </header>
     <div id="cuerpo"> 
     <form action="">
     <div id="persona">
     <div id="cuerpo1">
        <h3>Datos de la Persona</h3>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido">
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula">
      </div>
      <div id="cuerpo2">
        <input type="button" value="Siguiente" id="boton1">
      </div>
     </div>
    <div id="vehiculo">
    <div id="cuerpo3">
        <div id="bloque1">
            <h3>Vehiculo</h3>
            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula">
            <label for="placa">Placa:</label>
            <input type="text" id="placa">
            <label for="modelo">Marca:</label>
            <input type="text" id="marca">
        </div>
        
        <div id="bloque2">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo">
            <label for="modelo">Color:</label>
            <input type="text" id="color">
        </div>
        
      </div>
      <div id="cuerpo4">
        <input type="button" value="Atras" id="boton2">
        <input type="button" value="Siguiente" id="boton3">
      </div>
    </div>
     </form>
     </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>       
</body>
</html>