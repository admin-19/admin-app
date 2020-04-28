<?php
//require_once __DIR__ .'/./pr.php';
//echo get_include_path();
$request_method = $_SERVER["REQUEST_METHOD"];
$http  =     $_SERVER["REQUEST_SCHEME"];
$host  =     $_SERVER["HTTP_HOST"];
$path  =     $http."://".$host."/Rexpress/";

require_once __DIR__ .'/../modelo/usuario.php';
use usuario\Usuario;
// echo $_POST["email"];
// echo $_POST["password"];
// echo $request_method;
// echo __DIR__;
//echo $pr;	
//echo $path;

// /**----------------------------------------------------------------------------------------- */
// /**                                                                                          */
// /**   cabeceras de validaciones  para entrar a este metodo                                   */
// /**                                                                                          */
// /**                                                                                          */
// /**----------------------------------------------------------------------------------------- */
 if ($request_method == "POST") {
  error_log("Info=> prt_ini_session ; mesaje=>metodo-peticion=post");
  $usu = new Usuario;
  error_log("Info=> prt_ini_session ; mesaje=>usuario=" . base64_encode($_POST["nombreUsuario"]). "");
  error_log("Info=> prt_ini_session ; mesaje=>password=" . base64_encode($_POST["password"]). "");
  $usu->setPassword($_POST["password"]);
  $usu->setCorreo($_POST["nombreUsuario"]);
  /**----------------------------------------------------------------------------------------- */
  /**                                                                                          */
  /**   inicia la sesion                                                                       */
  /**   nombre de index del array  home                                                        */
  /**   valor de index en session  On                                                          */
  /**   home=>correo@correo.com                                                                */
  /**                                                                                          */
  /**----------------------------------------------------------------------------------------- */
  if ($usu->Auth_Usuario()) {
    session_start();
    $_SESSION["home"]="On";
    $arry=$usu->getDatosUsuario();
    $_SESSION["user_id"] = $arry[0]["idusuario"];
    $_SESSION["user_nombre"] = $arry[0]["nombre"];
    $_SESSION["user_correo"] = $arry[0]["correo"];
    $_SESSION["user_tipo"] = $arry[0]["idRol"];
    $_SESSION["user_activo"] = $arry[0][""];
    error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>" . $_SESSION["user_nombre"] . "");
    error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>" . $_SESSION["user_correo"] . "");
    error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>" . $_SESSION["user_tipo"] . "");
    error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>" . $_SESSION["user_activo"] . "");
    error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>" . $_SESSION["user_id"] . "");

        if(isset($_POST["check-login"])){
          error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>coocke={$_POST["check-login"]}");
          setcookie("user[correo]", base64_encode($_SESSION["user_email"]), time()+3600,"/");
        }
          error_log("Info=> prt_ini_session ; sessiom=>On;  mesaje=>" . $_SESSION["home"] . "");
          header("Location: {$path}view/home");
  } else {
          error_log("Info=> prt_ini_session ; sessiom=>Off;  mesaje=>null");
          header("Location: {$path}");
  }
} else {
  error_log("Info=> prt_ini_session ; mesaje=>metodo-peticion=get");
  error_log("Info=> prt_ini_session ; mesaje=>url-accedida={$path}pr_ini_session.php");
  $remote_host = "fort-Resxpress";
  error_log("Info=> prt_ini_session ; mesaje=>Host-peticion={$remote_host}");
  http_response_code(403);
}
?>