<?php
require_once (dirname((dirname(__DIR__)))."/modelo/HomeController.php");
use homecontroller\HomeController;
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=>" . $_SESSION["user_nombre"] . "");
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=>" . $_SESSION["user_correo"] . "");
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=>" . $_SESSION["user_tipo"] . "");
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=>" . $_SESSION["user_activo"] . "");
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=>" . $_SESSION["user_id"] . "");

//tipo USU=usuario ; ADM=administrador
$tipo=$_SESSION["user_tipo"];
//activo=1 true , 0 false
$activo=$_SESSION["user_activo"];
echo "<div class='' id=''>";
// echo  $_SESSION["user_correo"]."<br>";
echo  $_SESSION["user_nombre"]."</br>";
echo "</div>";
echo "<div id='messeg_delete_ok' role='alert'></div>";
$tb_usu=new HomeController;
if($tipo==1){
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> if admin true");
   if($activo ==1){
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> if activo true");
echo "<table class='table'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th colspan='9'>Usuarios</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

$row=$tb_usu->getTableUsus();

for($i=0;$i<count($row);$i++){

  $array_pos=array_keys($row[$i]);
  echo "<tr> ";
  $id_tabla=$i+1;
  echo "<th scope='col'><div id='colum_".$id_tabla."' class=''>$id_tabla</div></th> ";
  for($x=0;$x<count($array_pos);$x++){

    if($array_pos[$x]=="password" || 
      $array_pos[$x]=="tipo" ||
      $array_pos[$x]=="idusuario"||
      $array_pos[$x]=="activo"){
      $col_id_user=$row[$i]["idusuario"];
      if($array_pos[$x]=="activo"){
        if($row[$i][$array_pos[$x]]==1){
          echo "<th scope='col'><div class=''><i class='material-icons' style='color:green;'>check_circle</i></div></th>";
          $valudate_botton=1;
        }else if($row[$i][$array_pos[$x]]==0){
echo "<th scope='col'><div class=''><i class='material-icons' style='color:red;'>cancel</i></div></th>";
          $valudate_botton=0;
            }else{
echo "<th scope='col'><div class=''><i class='material-icons'>cancel</i></div></th>";
            }
          }
      }else{
echo "<th scope='col'><div id='colum_data_".$id_tabla."_".$array_pos[$x]."' class=''>".$row[$i][$array_pos[$x]]."</div></th> ";
        }
    }
    if($valudate_botton==1){
echo "<th scope='col'><div class=''><button type='button' class=''><i class='material-icons'>autorenew</i></button></div></th>";
echo "<th scope='col'><div class=''><button type='button' class=''><i class='material-icons' style='color:black;'>sd_storage</i></button></div></th>";
echo "<th scope='col'><div class=''><button type='button' class=''><i class='material-icons' style='color:#E2DEAD;'>description</i></button></div></th>";
echo "<th scope='col'><div class=''><button id='bt_delete' type='button' name='delete' class='' value='".$col_id_user."'><i class='material-icons' style='color:red;'>delete</i></button></div></th>";
    }else if($valudate_botton==0){
echo "<th scope='col'><div class=''><button type='button' class='' disabled><i class='material-icons' style='color:#D5DBDB;'>autorenew</i></button></div></th>";
echo "<th scope='col'><div class=''><button type='button' class='' disabled><i class='material-icons' style='color:#D5DBDB;'>sd_storage</i></button></div></th>";
echo "<th scope='col'><div class=''><button type='button' class='' disabled><i class='material-icons' style='color:#D5DBDB;'>description</i></button></div></th>";
echo "<th scope='col'><div class=''><button type='button' class='' disabled><i class='material-icons' style='color:#D5DBDB;'>delete</i></button></div></th>";
    }
echo "</tr>";

}
echo "</tbody>";
echo ("</table>");
  }else if ($activo==0){
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> if activo fase");
echo "<div id='alert-warnig' class='alert-warnig'></div>";

  }
/**-----------------------------------------------------------------------------------------------------*/
}else if ($tipo==2) {
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> data faild");
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> if admin true");
    if($activo ==1){
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> if activo true");
echo("<table>");
echo("<tr>");
echo("<th>TAbla Administradores</th>");
echo("</tr>");
$row=$tb_usu->getTableAdmi();
for($i=0;$i<count($row);$i++){
    $array_pos=array_keys($row[$i]);
    echo "<tr> ";
    for($x=0;$x<count($array_pos);$x++){
        if($array_pos[$x]=="password" || 
           $array_pos[$x]=="tipo" ||
           $array_pos[$x]=="idusuario"||
           $array_pos[$x]=="activo"){  
        }else{

echo  "<th>".$row[$i][$array_pos[$x]]."</th> ";

        }  
    }
echo  "<th><button type='button' class=''>editar</button></th>";
echo  "<th><button type='button' class=''>borrar</button></th>";
echo  "<th><button type='button' class=''>guardar</button></th>";
echo  "</tr>";
}
echo ("</table>");
  }else if ($activo==0){
    error_log("Info=> HomeView ; sessiom=>On;  mesaje=> if activo fase");

echo "<div id='alert-warnig' class='alert-warnig'></div>";
  }
}