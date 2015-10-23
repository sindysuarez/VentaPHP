<?php
require 'familia.php';

$fam=familia::getInstance();
$fam->setCodigo($_POST['codigofa']);
$fam->setDescripcion($_POST['descripcionfa']);

if (!$fam->guardar()) {
  echo "hey ya ese codigo existe";
}else {
  die("Felicidades has guardado una familia");
};

?>
