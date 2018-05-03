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
            <a href="#" id="a1">Datos Personales</a>
            <a href="#" id="a2">Datos del Vehiculo</a>
            <a href="#"id="a3" >Perfil Completo</a>
        </nav>
     </header>
     <div id="cuerpo"> 
     <form action="" id="formulario">
     <div id="persona">
     <div id="cuerpo1">
        <h3>Datos de la Persona</h3>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" class="validar">
        <label for="apellido" >Apellido:</label>
        <input type="text" id="apellido" class="validar">
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula" class="validar">
      </div>
      <div id="cuerpo2">
        <input type="button" value="Siguiente" id="boton1" class="boton" >
      </div>
     </div>
    <div id="vehiculo">
    <div id="cuerpo3">
        <div id="bloque1">
            <h3>Vehiculo</h3>
            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula" class="validar">
            <label for="placa">Placa:</label>
            <input type="text" id="placa" class="validar">
            <label for="modelo">Marca:</label>
            <input type="text" id="marca" class="validar">
        </div>
        
        <div id="bloque2">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" class="validar">
            <label for="modelo">Color:</label>
            <input type="text" id="color" class="validar">
        </div>
        
      </div>
      <div id="cuerpo4">
        <input type="button" value="Atras" id="boton2">
        <input type="button" value="Siguiente" id="boton3" class="boton" >
      </div>
    </div>
     </form>
     <div id="datos">

      <img src="../../img/2.png" id="foto">
     <div id="datos_p">
        <div  id="bloque1_datos">
          <p id="nombre_datos"><strong>Nombre:</strong> </p>
          <p id="apellido_datos"><strong>Apellido:</strong> </p>
          <br><br>
          <p id="cedula_datos"><strong>Cedula:</strong> </p>
        </div>
         <div id="bloque2_datos">
         <p id="matricula_datos"><strong>Matricula:</strong> </p>
         <p id="placa_datos"><strong>Placa:</strong> </p>
         <p id="marca_datos"><strong>Marca:</strong> </p>
         <br><br>
         <p id="modelo_datos"><strong>Modelo:</strong> </p>
         <p id="color_datos"><strong>Color:</strong> </p>
         </div>
     </div>
     <div id="botones_datos">
      <input type="button" value="Atras" id="boton4">
      <input type="button" value="Confirmar" id="boton5" class="boton" >
     </div>
     </div>
     </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>  
<script src="../../js/registro.js"></script>       
</body>
</html>