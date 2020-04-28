<?php namespace autentificacionUsuario;
require_once 'src/dao/RexpressDAO.php';
//require_once (__DIR__ .'/src/interfaces/UsuarioSevicios.php');
//implements UsuarioServicios

use rexDAO\RexpressDAO;
//use UsuarioDatos\UsuarioServicios;

class AutentificacionUsuario {
      private $id=0;
      private $userDataArray=array();
      private $table="usuario";

   public function __construct() { }

   public function getUserExits($user= array())
   {
      /**
       * table usuario db rexpress_d
       *  idusuario - nombre - apellido - correo - password - activo - tipo*/
      $nombre= $user["nombreUsuario"];
      $pass= $user["password"];
      error_log("info=>AutentificacionUsuario ; mensaje=>tabla= {$this->table}");

      /**encriptar datos
       * 
       *
       */
      $tab=$this->table;
      $query="SELECT * FROM {$tab} WHERE nombreUsuario='{$nombre}' AND password='{$pass}'";
      error_log("info=>AutentificacionUsuario ; mensaje=>SELECT * FROM {$tab} WHERE nombreUsuario=".base64_encode($nombre)."AND password='{$pass}'");
      $this->userDataArray=RexpressDAO::getData($query);
      if(count($this->userDataArray)==1){
               error_log("info=>AutentificacionUsuario ; mensaje=>correo encontrado ; registros devueltos ".count($this->userDataArray));
               $pass_has_db=$this->userDataArray[0]['password'];
               $pass_form=$user["password"];
            /**if( $user["email"]==$this->userDataArray[0]['correo'] && password_verify($pass_form ,$pass_has_db)){
               error_log("info=>AutentificacionUsuario ; mensaje=>email=true ; correo=true");**/
               $this->id=$this->userDataArray[0]['idusuario'];
              // error_log("info=>AutentificacionUsuario ; mensaje=>id usu=".$this->id);
               return true;
           // }else{**/

             //  error_log("info=>AutentificacionUsuario ; mensaje=>nombre=false ; correo=false");
               error_log("info=>AutentificacionUsuario ; mensaje=>id usu=".$this->id);
               return true; 
            //}
            
      }else{
            error_log("info=>AutentificacionUsuario ; mensaje=> correo no encontrado ; registros devueltos 0");
            return false;
      }
   }
   public function getUserData(){
         return $this->userDataArray;
   }

   public function setUserData($array =array())
   {
      
   }
}
?>