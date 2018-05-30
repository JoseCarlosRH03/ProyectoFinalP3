<?php
include_once("CRUD.php");
$resultado = 0;
$crud = new CRUD();
$cedula = $_POST['cedula'];
$resultado = $crud->InsertarPersona($_POST['nombre'],$_POST['apellido'],$cedula,$_POST['qr']);
 echo $resultado += $crud->InsertarVehiculo($_POST['modelo'],$_POST['marca'],$_POST['color'],$_POST['matricula'],$_POST['placa'],$cedula);

?>




