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
     <div id="cargador_degrafico">
        <input type="button" value="Agregar" id="Agregar_grafico">
        <input type="button" value="Ocultar" id="quitar_obsiones">
     </div>
     <div id="area" >
       <div id="a0">
                <html>
            <head>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
                <title>Ejemplo de cargar una pagina en un div</title>
                <script type='text/javascript' src='../../js/jquery-min.js'></script>
                <style type='text/css'>
                    .link       {cursor:pointer;text-decoration:underline;color:#00f;}
                    .enlace     {color:#00f;}
                    #contenido  {border:1px #bababa solid;min-height:50px;}
                    .clock      {position:relative;left:50%;top:50%;width:36px;height:36px;padding:20px;}
                </style>
            </head>

            <body>
                <h1>Ejemplo de cargar una pagina en un div</h1>
                <div class='link' onclick="cargarContenido('../cargar/pagina1.html')">pulsa aqui para cargar <b>pagina1.html</b> dentro del div <b>contenido</b></div>
                <div class='link' onclick="cargarContenido('../cargar/pagina2.html')">pulsa aqui para cargar <b>pagina2.html</b> dentro del div <b>contenido</b></div>
                <div class='link' onclick="cargarContenidoReloj('../cargar/pagina3.php')">pulsa aqui para cargar <b>pagina3.php</b> dentro del div <b>contenido</b>. Se muestra un reloj mientras se carga.</div>
                <div id='contenido'></div>
                
                <script type='text/javascript'>
                // Funcion para cargar un contenido en un div
                function cargarContenido(pagina)
                {
                    // cargamos la pagina pagina.html en el div contenido
                    $("#contenido").load(pagina);
                }
                // Funcion para cargar un contenido en un div mostrando un reloj de arena
                function cargarContenidoReloj(pagina)
                {
                    // cargamos el icono en el div donde ira el contenido
                    $("#contenido").html("<img src='clock.gif' class='clock' border='0' />");
                    // cargamos la pagina pagina3.php en el div contenido
                    $("#contenido").load(pagina);
                }
                </script>
            </body>
            </html>
       </div>
     </div>
    </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>  
<script src="../../js/menu.js"></script>
<script src="../../js/validador.js"></script>      
<script src="../../js/reportes.js"></script>  
</body>
</html>