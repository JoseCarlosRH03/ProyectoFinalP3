<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
</head>
<body>
    <section>
     <header>
         <img src="img/logo-uasd_cambio4.jpg" alt="" height="100px"/>
        <nav>
            <a href="#">Recuperar Contraseña</a>
        </nav>
     </header>
     <div id="cuerpo"> 
        <div id="login">
                <form id="formulario"> 
                    <div id="formulario">
                            <h3>Acceso al Sistema</h3>
                            <div>
                                <label for="nombre"> Nombre:<signo>*</signo></label>
                                <input type="text" id="nombre" name="nombre" class="letra">
                                <ul id="errorNombre">
                    
                                </ul>
                            </div>
                            <div>
                                <label for="contrasena">Password:<signo>*</signo></label>
                                <input type="password"  id="contrasena" name="password">  
                                <ul id="errorPassword">
                    
                                </ul>
                            </div> 
                              <p>los valores con (*) rojo son obligatorios</p>   
                    </div>
                        <div id="vib-boton">
                            <input type="submit" value="Enviar" id="boton">
                        </div>   
                    </form>  
        </div>
     </div>
     <footer>
        <p>Universidad Autónoma de Santo Domingo (UASD)</p>
     </footer>
    </section>
    
<script src="js/jquey-min.js"></script>      
<script src="js/index.js"></script>   
</body>
</html>