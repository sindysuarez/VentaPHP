<?php
require 'laboratorio.php';

$lab=laboratorio::getInstance();
$lab->setCodigo($_POST['codigolab']);
$lab->setNombre($_POST['nombrelab']);
$lab->setTelefono($_POST['telefonolab']);
$lab->setDireccion($_POST['dirlab']);
$lab->setFax($_POST['faxlab']);
$lab->setContacto($_POST['contactolab']);
echo $lab->getCodigo();
if (!$lab->guardar()) {
  echo "hola";
  die("no sirve".mysql_error());
}else {
  die("Felicidades has guardado una familia");
};

?>
