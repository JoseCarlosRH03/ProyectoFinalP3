<?php
try{
    
    $valor = $_POST['valor'];
   if($valor == 0){
     $llamada = '';
   }else {
       $llamada = 'WHERE ID =' .$valor;
   }
    $conexion = new PDO('mysql:host=localhost;dbname=lab9','root','');
    
    $statement = $conexion->prepare('SELECT * FROM totalventas '.$llamada);
    $statement->execute();

    $resultado = $statement->fetchAll();
    
     foreach($resultado as $datos){
         $arrego[]= $datos;
     }

    echo json_encode( $arrego);

}catch(PDOExcepction $e){
    echo "Error: ". $e->getmessage();
}

   
?>