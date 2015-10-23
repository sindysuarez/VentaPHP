<?php
  require '../db/conf.php';
  require '../db/familia.php';
  require '../db/laboratorio.php';
  $bd=Db::getInstance();
  $classFamilia=familia::getInstance();
  $clasLaboratorio=laboratorio::getInstance();
?>
