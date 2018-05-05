<?php
session_start();
if(isset($_SESSION['usuario'])){
      if($_SESSION['usuario'][2] == 'admin'){
        header("location: ../Admin/");
      }else if($_SESSION['usuario'][2] == 'rango2'){
        header('Location: ../Registro/');
      }else if($_SESSION['usuario'][2] != 'rango1'){
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
    <title>Document</title>
</head>
<body>
    <section>
     <header>
         <img src="../../img/login1.jpg" alt="" height="100px"/>
        <nav>
            <a href="#">.</a>
        </nav>
     </header>
     <div id="cuerpo"> 
        
     </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="../../js/jquery-min.js"></script>
<script src="../../js/validador.js"></script>       
</body>
</html>