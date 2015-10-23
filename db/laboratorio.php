<?php
class laboratorio {
   private $codigolab;
   private $nombrelab;
   private $telefonolab;
   private $dirlab;
   private $faxlab;
   private $contactolab;

   static $_instance;
   static $bd;

   const TABLA = 'laboratorio';



   public function __construct() {

   }

   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }

   public function getCodigo() {
      return $this->codigolab;
   }
   public function getNombre() {
      return $this->nombrelab;
   }
   public function getTelefono() {
      return $this->telefonolab;
   }
   public function getDireccion() {
      return $this->dirlab;
   }
   public function getFax() {
      return $this->faxlab;
   }
   public function getContacto() {
      return $this->contactolab;
   }
   public function setCodigo($codigolab) {
      $this->codigolab = $codigolab;
   }
   public function setNombre($nombrelab) {
      $this->nombrelab = $nombrelab;
   }
   public function setTelefono($telefonolab) {
      $this->telefonolab = $telefonolab;
   }
   public function setDireccion($dirlab) {
      $this->dirlab = $dirlab;
   }
   public function setFax($faxlab) {
      $this->faxlab = $faxlab;
   }
   public function setContacto($contactolab) {
      $this->contactolab = $contactolab;
   }

   public function guardar($bd){

     $sql="INSERT INTO `laboratorio`(`codigo_lab`, `nombre`, `telefono`, `direccion`, `fax`, `contacto`) VALUES ('$this->codigolab', '$this->nombrelab','$this->telefonolab','$this->dirlab','$this->faxlab','$this->contactolab');";
     /*Ejecutamos la query*/
     $stmt=$bd->ejecutar($sql);

     return $stmt;
   }

   public function mostrar($bd){
     $sql="SELECT * FROM `laboratorio` WHERE 1;";
     $stmt=$bd->ejecutar($sql);
     return $stmt;
   }
}
?>
