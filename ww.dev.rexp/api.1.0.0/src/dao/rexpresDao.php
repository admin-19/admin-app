<?php  namespace rexpress;

require_once 'configuracion/coneccion.inc.php';

use coneccion\Coneccion;


class RexpressDao{

    
    public static function getDatos($query){

        $retorno=[];
        $coneccionRexpres= Coneccion::getConection();
        if($coneccionRexpres->starConnect("rexpress")){
        error_log("info=>RexpressDao ; mensaje=>conecctado");
            $retorno= $coneccionRexpres->getQuery($query);
            $coneccionRexpres->closeConnect();
            return $retorno;
        }
        error_log("info=>RexpressDao ; mensaje=>no conecctado");
        return $retorno;
    }

}


?>