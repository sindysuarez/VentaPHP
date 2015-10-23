<?php
class familia {
   private $codigofa;
   private $descripcionfa;

   static $_instance;
   static $bd;


   const TABLA = 'familia';
   public function __construct() {

  }

  public static function getInstance(){
     if (!(self::$_instance instanceof self)){
        self::$_instance=new self();
     }
     return self::$_instance;
  }

   public function getCodigo() {
      return $this->codigofa;
   }
   public function getDescripcion() {
      return $this->descripcionfa;
   }

   public function setCodigo($codigofa) {
      $this->codigofa = $codigofa;
   }
   public function setDescripcion($descripcionfa) {
      $this->descripcionfa = $descripcionfa;
   }


   public function guardar($bd){
      $sql= "INSERT INTO `familia`(`codigo_fam`, `descripcion`) VALUES('$this->codigofa','$this->descripcionfa');";
      $stmt=$bd->ejecutar($sql);
      return $stmt;
   }

   public function mostrar($bd){
     $sql="SELECT * FROM `familia` WHERE 1;";
     $stmt=$bd->ejecutar($sql);
     return $stmt;
   }


}
?>
