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
        <input type="text" id="cedula" class="validar numeros cedula">
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
            <label for="modelo">Marca:</label><br>
            <select id="Brand" class="basic-select standard-select">
                <option value="0">Todas las Marcas</option>
                <option value="Acura">Acura</option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Aston Martin">Aston Martin</option>
                <option value="Audi">Audi</option>
                <option value="Austin">Austin</option>
                <option value="Baic">Baic</option>
                <option value="Bajaj">Bajaj</option>
                <option value="Bentley">Bentley</option>
                <option value="BMW">BMW</option>
                <option value="Brilliance">Brilliance</option>
                <option value="Buick">Buick</option>
                <option value="BYD">BYD</option>
                <option value="Cadillac">Cadillac</option>
                <option value="Caky">Caky</option>
                <option value="Chana">Chana</option>
                <option value="Changan">Changan</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chevy">Chevy</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroen">Citroen</option>
                <option value="Daewoo">Daewoo</option>
                <option value="Daihatsu">Daihatsu</option>
                <option value="DFM">DFM</option>
                <option value="Dodge">Dodge</option>
                <option value="Dongfeng">Dongfeng</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Foton">Foton</option>
                <option value="Gac Gonow">Gac Gonow</option>
                <option value="GMC">GMC</option>
                <option value="Honda">Honda</option>
                <option value="Hummer">Hummer</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Infiniti">Infiniti</option>
                <option value="Isuzu">Isuzu</option>
                <option value="Jac">Jac</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Jeep">Jeep</option>
                <option value="Jin-Bei">Jin-Bei</option>
                <option value="JMC">JMC</option>
                <option value="Kia">Kia</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Lexus">Lexus</option>
                <option value="Lincoln">Lincoln</option>
                <option value="Linfan">Linfan</option>
                <option value="Luxgen">Luxgen</option>
                <option value="Maserati">Maserati</option>
                <option value="Maxus">Maxus</option>
                <option value="Mazda">Mazda</option>
                <option value="McLaren">McLaren</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Mercury">Mercury</option>
                <option value="MG">MG</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Pontiac">Pontiac</option>
                <option value="Porsche">Porsche</option>
                <option value="Renault">Renault</option>
                <option value="Rolls Royce">Rolls Royce</option>
                <option value="Samsung">Samsung</option>
                <option value="Seat">Seat</option>
                <option value="Shineray">Shineray</option>
                <option value="Skoda">Skoda</option>
                <option value="Smart">Smart</option>
                <option value="SsangYong">SsangYong</option>
                <option value="Subaru">Subaru</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
             </select>
        </div>
        
        <div id="bloque2">
            <label for="modelo">Modelo:</label><br>
            <select id='modelos'>
            <option value="0">Todos los Modelos</option>
            </select><br>
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
        <input type="text" id="nombre_datos" name="nombre">
        <label for="apellido" >Apellido:</label>
        <input type="text" id="apellido_datos" name="apellido">
        <label for="cedula">Cedula:</label>
        <input type="text" id="cedula_datos" id="cedula" name="cedula">
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
            <div id="qr"  >
                
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
<script src="../../js/validadorDeCedula.js"></script>  
<script src="../../js/validador.js"></script> 
<script src="../../js/codificar.js"></script>     
<script src="../../js/modelos.js"></script>   
</body>
</html>