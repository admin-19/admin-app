<?php
require_once (dirname(__DIR__)."/modelo/AutentificacionUsuario.php");
require_once (dirname(__DIR__)."/modelo/src/implementacion/HomeServiceImp.php");

$http  =     $_SERVER["REQUEST_SCHEME"];
$host  =     $_SERVER["HTTP_HOST"];
$path  =     $http."://".$host."/Rexpress/";
use autentificacionUsuario\AutentificacionUsuario;
use homeserviceimp\HomeServiceImp;
$autentificacionUsuario=new AutentificacionUsuario;
$reg=new HomeServiceImp;

$nombre=isset( $_POST["nombre"] ) ? true : false;
$apellido=isset( $_POST["apellido"] ) ? $_POST["apellido"] : "[sin apellido Asigmado]";
$correo=isset( $_POST["correo"] ) ? true : false; //obligatorio
$password=isset( $_POST["password"] ) ? true : false;

$tipo=base64_decode($_GET["tipo"]);
$activo=base64_decode($_GET["activo"]);// default 0 o 1
error_log("error=>pr_registrar_user ; nombre= ".$_POST["nombre"]);
error_log("error=>pr_registrar_user ; apellido= ".$_POST["apellido"]);
error_log("error=>pr_registrar_user ; correo= ".$_POST["correo"]);
error_log("error=>pr_registrar_user ; pass= ".$_POST["password"]);
error_log("error=>pr_registrar_user ; tipo= ".$tipo);
error_log("error=>pr_registrar_user ; activo= ".$activo);


if($activo=="1"){
$activo=1;
}else if ($activo=="0") {
$activo=0;
}

if($correo && $password && $nombre){
    $pass=$_POST["password"];
    $corr=$_POST["correo"];
if($autentificacionUsuario->getUserExits(["password"=>$pass,"email"=>$corr])==false){
if($reg->createUser([
    "nombre"=>$_POST["nombre"],
    "apellido"=>$apellido,
    "correo"=>$_POST["correo"],
    "password"=>$_POST["password"],
    "activo"=>$activo,
    "tipo"=>$tipo,
     ])){
        error_log("error=>pr_registrar_user ; registro ok ");
        header("Location: {$path}");


     }else{
     error_log("error=>pr_registrar_user ; registro ko ");
     header("Location:{$path}");
     }
}else{
session_start();
$_SESSION["regitrado"]="usuario ya registrado";
error_log("error=>pr_registrar_user ; usuario ya registrado");
error_log("info=>pr_registrar_user ; mensaje = ".$_SESSION["regitrado"]);

header("Location: {$path}view/form");
}
}else{
error_log("error=>pr_registrar_user ; valores obligatorios no ingresado");       
header("Location: {$path}");

}
//////////////////////validacion  de datos///////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////

?>