<?php
require 'medicamento.php';

$med=medicamento::getInstance();
$med->setCodigo($_POST['codigome']);
$med->setNombre($_POST['nombreme']);
$med->setTipo($_POST['tipo']);
$med->setStock($_POST['stock']);
$med->setVendidas($_POST['vendidas']);
$med->setPrecio($_POST['precio']);
$med->setReceta($_POST['receta']);
$med->setCodigofa($_POST['cod_fa']);
$med->setCodigolab($_POST['cod_lab']);

if (!$med->guardar()) {
  echo "hola";
  die("no sirve".mysql_error());
}else {
  die("Felicidades has guardado una Medicamento");
};



 ?>
