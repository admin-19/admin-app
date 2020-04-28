<?php namespace usuario;
require_once 'AutentificacionUsuario.php';

use autentificacionUsuario\AutentificacionUsuario;

class Usuario extends AutentificacionUsuario{
private $nombre;
private $correo;
private $password;

function setNombre($nombre){
    $this->nombre=$nombre;
}
function getNombre(){
    return $this->nombre;
}
function setCorreo($correo){
    $this->correo=$correo;
}
function getCorreo(){
    return $this->correo;
}
function setPassword($password){
    $this->password=$password;
}
function getPassword(){
    return $this->password;
}

function Auth_Usuario(){
  error_log("Info=> Usuario->Auth_Usuario() ; mesaje=>nombre="   . base64_encode($this->getCorreo())  . "");
  error_log("Info=> Usuario->Auth_Usuario() ; mesaje=>password=" . base64_encode($this->getPassword()). "");
return $this->getUserExits(
       [
        "nombreUsuario"=>$this->getCorreo(),
        "password"=>$this->getPassword()
        ]
       );
}
public function getDatosUsuario(){
    return $this->getUserData();
}

}
?>