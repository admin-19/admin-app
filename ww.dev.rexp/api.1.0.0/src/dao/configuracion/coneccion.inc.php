<?php namespace coneccion;

require_once 'config.inc.php';

class Coneccion{
    private static $conecciondb;
    private $conn;
    private function __construct() {}

    public  static function  getConection(){
        
        if(is_null(self::$conecciondb)) {
        self::$conecciondb = new Coneccion();  
        }
        return self::$conecciondb;
    }
       
    public function starConnect($name){
        $ambito=HOSTCONFIG["db"]["ambito"];
        $host=HOSTCONFIG["db"][$name][$ambito]["host"];
        $user=HOSTCONFIG["db"][$name][$ambito]["user"];
        $password=HOSTCONFIG["db"][$name][$ambito]["password"];
        $name_db=$name."_".$ambito;
        $this->conn = mysqli_connect($host ,$user, $password ,$name_db );
        if(!$this->conn){
            error_log("error=>Coneccion->starConnect() ; mensaje=>".mysqli_error($this->conn));
            return false;
        }else{
            error_log("info=>Coneccion->starConnect() ; mensaje=>coneccion realizada....");
             return true;
        }
    }
    public function closeConnect(){
        /**
         * verifica que la coneccion se a cerrado correctamene
         */
        if(mysqli_close($this->conn)){
            error_log("info=>Coneccion->closeConnect() ; mensaje=> coneccion cerrada");
        }else{
            error_log("error=>Coneccion->closeConnect() ;mensaje=> coneccion no cerrda");
        }
    }


    public function getQuery($query){

       $resulset= mysqli_query($this->conn,$query);
       $return =array();

       error_log("info=>RexpressDao ; mensaje=>numero de resultados".mysqli_num_rows($resulset) );
       if (mysqli_num_rows($resulset) > 0) {
            $return=mysqli_fetch_all($resulset, MYSQLI_ASSOC);
           } 
           return $return;
    }



}


?>