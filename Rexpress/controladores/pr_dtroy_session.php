<?php
    session_start();
	$http  =     $_SERVER["REQUEST_SCHEME"];
	$host  =     $_SERVER["HTTP_HOST"];
	$path  =     $http."://".$host."/Rexpress/";
    if(isset($_SESSION["home"])){
    session_unset();
   // session_destroy();
    error_log("Info=> prt_dtroy_session ; mesaje=>session destroy ; home=null");
    header("Location: {$path}");
}
    exit;