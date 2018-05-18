<?php
include_once("dbc.php");

class CRUD
{
   private $busqueda;
   private $resultado;
   private $insertar;
   private $status = 'activo';


   public function __construct(){ }

   public function GetCoenxion()
   {
    return dbc::GetConexion();
   } 
 
   public function SelectEmpleado($nombre,$contrasena)
   { 
    $this->busqueda = $this->GetCoenxion()->prepare('SELECT * FROM empleados WHERE username = :nombre AND password = :contrasena AND estatus = :activo');
    $this->busqueda->execute(array(':nombre'=>$nombre , ':contrasena'=> $contrasena, ':activo'=> $this->status));
    return $this->Guardar_1();  
   }

   public function InsertarPersona($nombre, $apellido, $cedula)
   {
    $this->insertar = $this->GetCoenxion()->prepare('INSERT INTO personas (	ID, nombre, apellido, cedula) Value(null,:nombre, :apellido, :cedula)');
    $this->insertar->execute(array(':nombre'=>$nombre , 'apellido'=> $apellido, 'cedula'=> $this->cedula));
   }
   
   public function InsertarVehiculo($ID, $modelo, $marca, $color,	$matricula, $idPersona )
   {
    $this->insertar = $this->GetCoenxion()->prepare('INSERT INTO vehiculo (ID, modelo, marca, color,	matricula, idPersona ) Value(null,:modelo, :marca, :color, :matricula, :idPersona)');
    $this->insertar->execute(array(':modelo'=>$modelo , ':marca'=> $marca, ':color'=> $color,':matricula'=> $matricula,':idPersona'=> $idPersona));
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

