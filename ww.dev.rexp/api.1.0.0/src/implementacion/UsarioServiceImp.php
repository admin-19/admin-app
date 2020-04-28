<?php  namespace usuarioServiceImp;

require_once (dirname(__dir__)."/servicios/usuarioServices.php");
require_once (dirname(__dir__)."/dao/rexpresDao.php");

use rexpress\RexpressDao;
use usuarioServices\UsuarioService;

class UsuarioServiceImp implements UsuarioService {

    
public function eliminarUsuarioId($id)
{
    
}

public function buscarUsuarioId($id)
{
$query="SELECT * FROM usuario WHERE idusuario='{$id}'";
return RexpressDao::getDatos($query);
}

public function altaUsuario()
{
    
}

}
?>