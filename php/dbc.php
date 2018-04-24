
<?php
 class dbc 
 {
    private static $conexion = null; 

    private function __construct(){ }

    public static function GetConexion()
    {
        try
        {
            if(self::$conexion == null )
            {
                self::$conexion = new PDO('mysql:host=localhost;dbname=proyectofinal','root',''); 
            }
        }catch(PDOExcepction $e){
            echo "Error: ". $e->getmessage();
        }
        return self::$conexion;
    }

    public static function GetDesconectar()
    {
       self::$conexion->close(); 
    }
 }
?>
