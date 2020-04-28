<?php
require_once (dirname(__DIR__)."/modelo/HomeController.php");

use homecontroller\HomeController;

//metodos GET tipo de accion  y el tipo de usuario

$tipo_config=isset($_GET["acction"]) ? true : false ;
$id_config=isset($_POST["idusuario"]) ? true : false ;
if( $tipo_config && $id_config ){
    $homecontroller=new HomeController;
    switch ($_GET["acction"]){
     case 'delete':
        $id=$_POST["idusuario"];
      if($homecontroller->deleteUsuer($id)){
        echo("ok");
      }else{
        echo("ko");
      }
         break;
     case 'update':
        
        break;
    }
}else{

    echo("ok-values=null");
}






