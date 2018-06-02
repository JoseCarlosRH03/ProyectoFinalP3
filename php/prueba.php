<?php


$conexion = mysqli_connect("localhost","root","");
$db = mysqli_select_db("proyectofinal");
$consulta = "select puerta.nombre from puerta,turnos,empleados where turnos.idEmpleado=empleados.id and puerta.id=turnos.idPuerta ";
$resultado = mysqli_query($conexion, $consulta);

 echo $usuario = mysqli_fetch_array($resultado);

?>

