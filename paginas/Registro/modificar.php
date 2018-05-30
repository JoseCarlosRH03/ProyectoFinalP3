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
         <form action="">
            <select name="bucador"  id="aaa">
                <option value="cedula">Cedula</option>
                <option value="placa">Placa</option>
                <option value="Matricula">Matricula</option>
            </select>
            <input type="text"  placeholder="dato correspondiente" id=inputtext class="cedula">
            <input type="button" value="Buscar" id="inputbutton">
            <p>Selecciones el metodo de busqueda y complete el campo</p>
         </form> 
     </div>
 
      <div id="datos">
      <form action=""> 
      <img src="../../img/2.png" id="foto">
       <div id="datos_p">
        <div  id="bloque1_datos">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre_datos" name="nombre">
        <label for="apellido" >Apellido:</label>
        <input type="text" id="apellido_datos" name="apellido">
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula_datos" name="cedula">
       </div>
         <div id="bloque2_datos">
            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula_datos" name="matricula">
            <label for="placa">Placa:</label>
            <input type="text" id="placa_datos" name="placa">
            <label for="modelo">Marca:</label>
            <input type="text" id="marca_datos" name="marca">
         </div>
        <div id="bloque3_datos">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo_datos" name="modelo">
            <label for="modelo">Color:</label>
            <input type="text" id="color_datos" name="color">
            </div>
            <div id="codigoGR" width="250px" >
                <h3>Codigo QR</h3>
            </div>
        </div>
     <div id="botones_datos">
      <input type="button" value="Cancelar" id="boton4">
      <input type="button" value="Modificar" id="boton5" class="boton">
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
<script src="../../js/codificar.js"></script>      
</body>
</html>