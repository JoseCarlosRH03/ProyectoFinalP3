<?php

include_once("dbc.php");

class CRUD
{
   private $conexion; 
   private $busqueda;
   private $resultado;

   public function __construct(){ }

   public function SelectEmpleado($contrasena, $nombre)
   {
      $this->conexion = dbc::GetConexion();
      $this->busqueda = $this->conexion->prepare('SELECT * FROM empleados WHERE nombre = :nombre AND contrasena = :contrasena');
      $this->busqueda->execute(array(':nombre'=>$nombre , 'contrasena'=> $contrasena));
      $this->Guardar_1();  
   }

   private function Guardar_1()
   {
    if ($this->busqueda != null){

      $this->resultado = $this->busqueda->fetch();
      print_r($this->resultado);

     }else{

       echo("error");

     }
   }
}
?>

