<?php

require 'laboratorio.php';
require 'familia.php';

echo "hola";
$fa=laboratorio::getInstance();
// $fa1=familia::getInstance();
// $codigolab="hola";
// $nombrelab="hola";
// $telefonolab="hola";
// $dirlab="hola";
// $faxlab="hola";
// $contactolab="hola";
//
// $fa->setCodigo($codigolab);
// $fa->setNombre($nombrelab);
// $fa->setTelefono($telefonolab);
// $fa->setDireccion($dirlab);
// $fa->setFax($faxlab);
// $fa->setContacto($contactolab);
//
// echo "hola";
// if (!$fa->guardar()) {
//     die('Consulta no válida: ' . mysql_error());
// }
// echo $fa->getCodigo();
echo "hola";
$objs=$fa->mostrar();
while ($vec=mysql_fetch_assoc($objs)) {
  echo $vec['codigo_lab'].$vec['nombre']."<br>";
}

?>
