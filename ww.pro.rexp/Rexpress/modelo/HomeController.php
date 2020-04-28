<?php namespace homecontroller;
require_once (__DIR__.'/src/implementacion/HomeServiceImp.php');


 use homeserviceimp\HomeServiceImp;

 class HomeController{
 
    public $servicio;

    public function __construct()
    {
        $this->servicio=new HomeServiceImp;
    }

  public function getTableUsus(){
      $TP="USU";
    return $this->servicio->all($TP);
    }
    public function getTableAdmi(){
        $TP="ADM";
      return $this->servicio->all($TP);
      }
      public function deleteUsuer($ID){
        return $this->servicio->deleteUser(["id"=>$ID]);
      }


    

 }
?>


