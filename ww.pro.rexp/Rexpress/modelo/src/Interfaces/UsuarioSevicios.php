<?php
namespace UsuarioDatos;
interface  UsuarioServicios{

    function getUserExits($user=array());
    function getUserData();
    function setUserData($array=array());

    
}


?>