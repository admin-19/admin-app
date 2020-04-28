<?php
// require_once "api.1.0.0/src/implementacion/UsarioServiceImp.php";

//  use usuarioServiceImp\UsuarioServiceImp;



// $valor1=isset($_GET['valor1']) ? $_GET['valor1'] :"0";

// $usuarioServicio=new UsuarioServiceImp;
// $usuarioServicio->buscarUsuarioId($valor1);
// $objeto= $usuarioServicio->buscarUsuarioId($valor1);
//$objeto[0]["idusuario"];
//echo $objeto[0]["idusuario"];

header('Content-Type: application/json');
header("X-Sample-Test: foo");

$objeto2[0]["conf"]="ok";
$objeto2[0]["data"][]=$_POST["baz"];
$objeto2[0]["data"][]=$_POST["id"];

echo  json_encode($objeto2);
exit;
echo "edison";
//echo $objeto[0];
//ECHO  var_dump($usuarioServicio->buscarUsuarioId($valor1));
?>