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
         <img src="../../img/login1.jpg" alt="" height="100px"/>
        <nav>
            <a href="index.php" id="atras">Atras</a>
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
        <input type="text" id="nombre" class="validar letras">
        <label for="apellido" >Apellido:</label>
        <input type="text" id="apellido" class="validar  letras">
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula" class="validar numeros">
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
            <input type="text" id="matricula" class="validar numerosLetras">
            <label for="placa">Placa:</label>
            <input type="text" id="placa" class="validar numerosLetras">
            <label for="modelo">Marca:</label>
            <input type="text" id="marca" class="validar  letras">
        </div>
        
        <div id="bloque2">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" class="validar numerosLetras">
            <label for="modelo">Color:</label>
            <input type="text" id="color" class="validar  letras">
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
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre_datos" name="nombre" disabled>
        <label for="apellido" >Apellido:</label>
        <input type="text" id="apellido_datos" name="apellido" disabled>
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula_datos" name="cedula" disabled>
        </div>
         <div id="bloque2_datos">
            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula_datos" name="matricula"  disabled>
            <label for="placa">Placa:</label>
            <input type="text" id="placa_datos" name="placa"  disabled>
            <label for="modelo">Marca:</label>
            <input type="text" id="marca_datos" name="marca"  disabled>
         </div>
         <div id="bloque3_datos">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo_datos" name="modelo"  disabled>
            <label for="modelo">Color:</label>
            <input type="text" id="color_datos" name="color"  disabled>
            </div>
            <div id="codigoGR" width="250px" >
                <h3>Codigo QR</h3>
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
<script src="../../js/validador.js"></script>  
<script src="../../js/codificar.js"></script>      
</body>
</html>