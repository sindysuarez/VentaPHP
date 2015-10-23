<?php
class medicamento {
   private $codigome;
   private $nombreme;
   private $tipo;
   private $stock;
   private $vendidas;
   private $precio;
   private $receta;
   private $cod_fa;
   private $cod_lab;


   static $_instance;
   static $bd;


   const TABLA = 'medicamento';
   public function __construct() {
     require 'conf.php';
     $this->bd=Db::getInstance();

  }

  public static function getInstance(){
     if (!(self::$_instance instanceof self)){
        self::$_instance=new self();
     }
     return self::$_instance;
  }

   public function getCodigo() {
      return $this->codigome;
   }
   public function getNombre() {
      return $this->nombreme;
   }
   public function getTipo() {
      return $this->tipo;
   }
   public function getStock() {
      return $this->stock;
   }
   public function getVendidas() {
      return $this->vendidas;
   }
   public function getPrecio() {
      return $this->precio;
   }
   public function getReceta() {
      return $this->receta;
   }
   public function getCodigofa() {
      return $this->cod_fa;
   }
   public function getCodigolab() {
      return $this->cod_lab;
   }

   public function setCodigo($codigome) {
      $this->codigome = $codigome;
   }
   public function setNombre($nombreme) {
      $this->nombreme = $nombreme;
   }
   public function setTipo($tipo) {
      $this->tipo = $tipo;
   }
   public function setStock($stock) {
      $this->stock = $stock;
   }
   public function setVendidas($vendidas) {
      $this->vendidas = $vendidas;
   }
   public function setPrecio($precio) {
      $this->precio = $precio;
   }
   public function setReceta($reseta) {
      $this->reseta = $receta;
   }
   public function setCodigofa($cod_fa) {
      $this->cod_fa = $cod_fa;
   }
   public function setCodigolab($cod_lab) {
      $this->cod_lab = $cod_lab;
   }

   public function guardar(){
      $sql= "INSERT INTO `medicamento`(`codigo_medica`, `nombre`, `tipo`, `stock`, `vendidas`, `precio`, `cod_familia`, `cod_laboratorio`, `receta`) VALUES ('$this->codigome','$this->nombreme','$this->tipo','$this->stock','$this->vendidas','$this->precio','$this->cod_fa','$this->cod_lab','$this->receta');";
      $stmt=$this->bd->ejecutar($sql);
   }


}
?>
