<?php
include_once("CRUD.php");
include_once("Login.php");

$crud = new CRUD();
$login =  new Login($crud);
echo $login->CargarUsuario($_POST['nombre'], $_POST['password']); 
?>