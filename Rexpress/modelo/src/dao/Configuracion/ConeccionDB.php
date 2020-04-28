<?php namespace conecciondb;

require_once ('Confighost.php');

class ConeccionDB{

    private static $conecciondb;

    private function __construct() {}

    public  static function  getConection(){
        
        if(is_null(self::$conecciondb)) {
        self::$conecciondb = new ConeccionDB();  
        }
        return self::$conecciondb;
    }
       
    public function starConnect(){
        $conn = mysqli_connect(HOSTCONFIG["HOST"] ,HOSTCONFIG["USER"], HOSTCONFIG["PASSWORD"] ,HOSTCONFIG["DATABASE"] );
        if(!$conn){
            error_log("error=>ConeccionDB->starConnect() ; mensaje=>".mysqli_error($conn));
            return null;
        }else{
            error_log("info=>ConeccionDB->starConnect() ; mensaje=>coneccion realizada....");
             return $conn;
        }
    }
    public function closeConnect($conecction){
        /**
         * verifica que la coneccion se a cerrado correctamene
         */
        if(mysqli_close($conecction)){
            error_log("info=>ConeccionDB->closeConnect() ; mensaje=> coneccion cerrada");
        }else{
            error_log("error=>ConeccionDB->closeConnect() ;mensaje=> coneccion no cerrda");
        }
    }
}
?>