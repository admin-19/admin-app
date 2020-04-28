<?php namespace rexDAO;
require_once ('Configuracion/ConeccionDB.php');
use conecciondb\ConeccionDB;
class RexpressDAO{
    /**
     * Devuelde un array assoc con todos los registros de la tabla 
     * @param String  $query select de las tablas 
     * @return $arrayAssoc
     */
    public static function getData($query){
        $ojb=ConeccionDB::getConection();
        $conn=$ojb->starConnect();
        $result=mysqli_query($conn,$query);
        $return =array();

        error_log("info=>RexpressDao ; mensaje=>numero de resultados".mysqli_num_rows($result) );
        if (mysqli_num_rows($result) > 0) {
             $return=mysqli_fetch_all($result, MYSQLI_ASSOC);
            } 
            $ojb->closeConnect($conn);
            return $return;
    }


    /**
     * Devuelde un array assoc con todos los registros de la tabla 
     * @param String  $query  realizar insert delete o update
     * @return boolean
     */
    public static function setData($query){
        $ojb=ConeccionDB::getConection();
        $conn=$ojb->starConnect();
        if(mysqli_query($conn,$query)){
            $ojb->closeConnect($conn);
            return true;
        }else{
            $ojb->closeConnect($conn);
            return false;
        }
        

        }

        
}

?>