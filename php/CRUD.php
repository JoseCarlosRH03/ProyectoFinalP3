<?php
include_once("dbc.php");

class CRUD
{
   private $busqueda;
   private $resultado;
   private $insertar;
   private $status = 'activo';


   public function __construct(){ }

   private function GetConexion()
   {
    return dbc::GetConexion();
   } 
 
   public function SelectEmpleado($nombre,$contrasena)
   { 
    $this->busqueda = $this->GetConexion()->prepare('SELECT * FROM empleados WHERE username = :nombre AND password = :contrasena AND estatus = :activo');
    $this->busqueda->execute(array(':nombre'=>$nombre , ':contrasena'=> $contrasena, ':activo'=> $this->status));
    return $this->Guardar_1();  
   }

   public function InsertarPersona($nombre, $apellido, $cedula,$qr)
   {
    $this->insertar = $this->GetConexion()->prepare('INSERT INTO personas (nombre, apellido, cedula,sha1) Value
    (:nombre, :apellido, :cedula, :sha1 )');
    return $this->insertar->execute(array(':nombre'=>$nombre , ':apellido'=> $apellido, ':cedula'=> $cedula, ':sha1'=> $qr));
   }
   
   public function InsertarVehiculo($modelo, $marca, $color,	$matricula,$placa, $idPersona )
   {
    $this->insertar = $this->GetConexion()->prepare('INSERT INTO vehiculo (modelo, marca, color, matricula, placa, idPersona) Value
    (:modelo, :marca, :color, :matricula, :placa, :idPersona)');
    return $this->insertar->execute(array(':modelo'=>$modelo ,':marca'=> $marca,':color'=> $color,':matricula'=> $matricula,':placa'=> $placa,':idPersona'=> $idPersona));
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

