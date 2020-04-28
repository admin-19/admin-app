<?php namespace homeserviceimp;

require_once (dirname(__dir__)."/dao/RexpressDAO.php");
require_once (dirname(__dir__)."/Interfaces/HomeServicio.php");

use rexDAO\RexpressDAO;
use homeservicio\HomeServicio;

class HomeServiceImp implements HomeServicio {
  private $tabla="usuario";
  private $arrayDate=[];
  private $confirmar=false;

    public  function deleteUser($array_filter=array()){
      $T=$this->tabla;
      $ID=$array_filter["id"];
      //DELETE FROM table_name WHERE condition;
      $query="DELETE FROM {$T} WHERE idusuario={$ID}";

      return  RexpressDAO::setData($query);

      }
    public function updateUser( $array_filter=array()){
        $query="";

          RexpressDAO::setData($query);
        }
    public function createUser($array_filter=array()){
          $nombre=$array_filter["nombre"];
          $apellido=$array_filter["apellido"];
          $correo=$array_filter["correo"];
          $password=$array_filter["password"];
          $activo=$array_filter["activo"];
          $tipo=$array_filter["tipo"];
          $pass_hash=password_hash($password,PASSWORD_DEFAULT,['cost'=>10]);
          $query="INSERT INTO `usuario` (`nombre`, `apellido`, `correo`, `password`, `activo`, `tipo`) VALUES ('{$nombre}', '{$apellido}', '{$correo}', '{$pass_hash}',{$activo},'{$tipo}');";
          error_log($query);  
          return RexpressDAO::setData($query);
      }
    public function idFindUser($array_filter=array()){
          $tabla=$array_filter=["tabla"];
          $id=$array_filter=["id"];
          $query="SELECT * FROM {$tabla} WHERE idusuario='{$id}';";
          return RexpressDAO::getData($query);

      }

      public function all($TP){
        $T=$this->tabla;
        $query="SELECT * FROM {$T} WHERE tipo ='{$TP}';";
        error_log($query);  
        return RexpressDAO::getData($query);
      }
      
}

