<?php

$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido']; 
$cedula = $_POST['cedula']; 
$matricula = $_POST['matricula']; 
$placa = $_POST['placa']; 
$marca = $_POST['marca']; 
$modelo = $_POST['modelo']; 
$color = $_POST['color'];
$val = $nombre . $matricula . $cedula . $apellido . $color . $placa . $modelo . $marca;
echo  json_encode(sha1($val));
 

?>