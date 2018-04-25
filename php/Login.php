<?php
 include_once("CRUD.php");
  
  $crud = new CRUD();
  $crud->SelectEmpleado($_POST['nombre'],$_POST['password']);

?>


