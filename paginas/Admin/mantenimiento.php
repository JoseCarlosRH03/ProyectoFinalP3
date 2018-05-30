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
    <link rel="stylesheet" href="../../css/modificar.css">
    <title>Document</title>
</head>
<body>
    <section>
     <header>
         <img src="../../img/login1.jpg" alt="" height="100px"/>
        <nav>
            <a href="index.php" id="atras">Atras</a>
            <a href="#" id="buscarButoon">Buscar</a>
        </nav>
     </header>
 <div id="cuerpo">
     <div id="buscador">
         <form action="" >
            <select name="cars" id="aaa">
                <option value="insertar">Insertar</option>
                <option value="modificar" selected>Modificar</option>
                <option value="eliminar">Eliminar</option>
            </select>
            <input type="text"  placeholder="Introdusca la Cedula" id=inputtext class="cedula numeros">
            <input type="button" value="Buscar" id="inputbutton">
            <p>Selecciones el metodo de busqueda y complete el campo</p>
         </form> 
     </div>
 
      <div id="datos">
      <form action="" id='empleado'> 
      <img src="../../img/2.png" id="foto">
       <div id="datos_p">
        <div  id="bloque1_datos">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre_datos" name="nombre" class="letras">
        <label for="apellido" >Apellido:</label>
        <input type="text" id="apellido_datos" name="apellido" class="letras">
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula_datos" name="cedula" class="numeros">
       </div>
         <div id="bloque2_datos">
            <label for="user">Nombre de usuario:</label>
            <input type="text" id="user" name="user" class="numerosLetras">
            <label for="placa">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" class="password">
            <label for="confirmar">Confirmar:</label>
            <input type="password" id="confirmar" name="confirmar" class="password">
         </div>
        <div id="bloque3_datos">
            <label for="Cargo">Cargo:</label>
            <input type="text" id="Cargo" name="Cargo" class="numerosLetras">
            <label for="turnos">Turnos:</label>
            <div id="radio">
                <input type="radio" name="turno" value="Mañana" class="radio1"><texto>Mañana</texto>
                <input type="radio" name="turno" value="Tarde"  class="radio1"> <texto>Tarde</texto>
                <input type="radio" name="turno" value="Noche"  class="radio1"> <texto>Noche</texto>
            </div>
            <label for="select" class="puertas">Puertas</label><br>
            <select name="select">
            <option value="" selected>Obsiones</option> 
            <option value="Norte1">Norte 1</option> 
            <option value="Norte2">Norte 2</option>
            <option value="Sur">Sur</option>
            <option value="Este">Este</option>
            <option value="value3">Oeste</option>
            </select>
            </div>
        </div>
     <div id="botones_datos">
      <input type="button" value="Cancelar" id="boton4">
      <input type="button" value="Comfirmar" id="boton5" class="boton">
     </div>
     </form>
     </div>
 
     </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>  
<script src="../../js/menu.js"></script>
<script src="../../js/validadorDelModificar.js"></script>  
<script src="../../js/validador.js"></script> 
<script src="../../js/mantenimientoPersonal.js"></script>
</body>
</html>