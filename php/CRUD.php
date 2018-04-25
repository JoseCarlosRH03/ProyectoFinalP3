<?php

include_once("dbc.php");

class CRUD
{
   private $conexion; 
   private $datos;
   private $resultado;

   public function __construct(){ }

   public function SelectEmpleado($contrasena, $nombre)
   {
      $this->conexion = dbc::GetConexion();
      $this->datos = $this->conexion->prepare('SELECT * FROM empleados WHERE nombre = :nombre AND contrasena = :contrasena');
      $this->datos->execute(array(':nombre'=>$nombre , 'contrasena'=> $contrasena));
      
      if ($this->datos != null){
       $this->resultado = $this->datos->fetch();
       print_r($this->resultado);
      }else{
        echo("error");
      }

     // dbc::GetDesconectar();
   }
}

$crud = new CRUD();
$crud->SelectEmpleado("12341234","Jose Carlos");
?>

