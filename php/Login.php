<?php
 include("CRUD.php");
  
class Login {

  private $crud;
  private $datos;
  private $usuario;

  public function __construct($valor){
    $this->crud = $valor;
   }
  
  public function CargarUsuario ($nombre,$password){

    $this->datos = $this->crud->SelectEmpleado($nombre,$password);  
    $this->usuario = [$this->datos[1],$this->datos[2],$this->datos[5]]; 
    return json_encode($this->usuario);
    



  }
 
  public function Redireccion(){
   
     
  }
  
  
}
   
  $crud = new CRUD();
  $login =  new Login($crud);
  echo $login->CargarUsuario($_POST['nombre'], $_POST['password']); 
?>

 
