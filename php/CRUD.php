<?php

include_once("dbc.php");

class CRUD
{
   private $conexion; 
   private $datos;
   

   public function __construct(){ }

   public SelectEmpleado($contrasena, $nombre)
   {
      $this->conexion = dbc::GetConexion();
      this->tados = $this->conexion->query("SELECT nombre,tipo from empleados where usuario = ".$nombre." and contrasena = ".$contrasena);
      
      echo $this->datos;
     
      dbc::GetDesconectar();
   }
   
  $crud = new CRUD();
  $crud->SelectEmpleado("12341234","Jose Carlos");
}

?>