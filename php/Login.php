 <?php
  include_once("CRUD.php");
class Login {

  private $crud;
  private $datos;
  private $usuario;
  private $puerta;

  public function __construct($valor){
    $this->crud = $valor;
   }
  
  public function CargarUsuario ($nombre,$password){
    
    $this->datos = $this->crud->SelectEmpleado($nombre,$password);  
    
      if($this->datos[4] == 'rango1'){
        
        $this->puerta = $this->crud->SelectPuerta($this->datos[0]);

        $this->usuario = array ($this->datos[1],$this->datos[2],$this->datos[4],$this->puerta[0]); 
        $this->usuario;
      
      }else{
        $this->usuario = array ($this->datos[1],$this->datos[2],$this->datos[4]); 
        $this->usuario;    
      }
   

    if( $this->usuario != null ){
      session_start();
      $_SESSION['usuario'] = $this->usuario;
    }

    return $this->usuario = json_encode($this->usuario);
  }
} 
?>

 
