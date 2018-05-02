<?php
include_once("dbc.php");

class CRUD
{
   private $conexion; 
   private $busqueda;
   private $resultado;

   public function __construct(){ }

   public function SelectEmpleado($nombre,$contrasena)
   {
      $this->conexion = dbc::GetConexion();
      $this->busqueda = $this->conexion->prepare('SELECT * FROM empleado WHERE nombre = :nombre AND contrasena = :contrasena');
      $this->busqueda->execute(array(':nombre'=>$nombre , 'contrasena'=> $contrasena));
      return $this->Guardar_1();  
   }

   private function Guardar_1()
   {
    if ($this->busqueda != null){

      $this->resultado = $this->busqueda->fetch();
    return  $this->resultado;

     }else{

       echo("error");

     }
   }
}
?>

