 <?php
  
class Login {

  private $crud;
  private $datos;
  private $usuario;
  private $session;


  public function __construct($valor){
    $this->crud = $valor;
   }
  
  public function CargarUsuario ($nombre,$password){
    
    $this->datos = $this->crud->SelectEmpleado($nombre,$password);  
    $this->usuario = array ($this->datos[1],$this->datos[2],$this->datos[5]); 
    $this->session =  $this->usuario;
    
    if( $this->usuario != null ){
      session_start();
      $_SESSION['usuario'] = $this->session;
    }

    return $this->usuario = json_encode($this->usuario);
  }
} 
?>

 
