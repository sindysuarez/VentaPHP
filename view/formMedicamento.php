<?php
require '../init/initFam.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medicamento</title>
    <link rel="stylesheet" href="../static/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <form class="" action="../db/saveMe.php" method="post">

        Codigo DE Medicamento<br/>
            <input type="text" name="codigome" value="" /> <br/>
        Nombre De Medicamento<br/>
            <input type="text" name="nombreme" value="" /><br/>
        Tipo<br/>
            <input type="text" name="tipo" value="" /><br/>
        stock<br/>
            <input type="text" name="stock" value="" /><br/>
        Vendidas<br/>
            <input type="text" name="vendidas" value="" /><br/>
        precio<br/>
            <input type="text" name="precio" value="" /><br/>
        reseta<br/>
            <input type="text" name="receta" value="" /><br/>
        Selecciona Una Descripcion para la familia<br/>
            <select class="" name="cod_fa" required>
            <?php
            $objs=$classFamilia->mostrar($bd);
            while ($vec=mysql_fetch_assoc($objs)) {?>
              <option value="<?php echo $vec['codigo_fam']?>"><?php echo $vec['descripcion'] ?></option>
            <?php } ?>
          </select><br/>
          Selecciona Un laboratorio<br/>
              <select class="" name="cod_lab" required>
              <?php
              $objs=$clasLaboratorio->mostrar($bd);
              while ($vec=mysql_fetch_assoc($objs)) {?>
                <option value="<?php echo $vec['codigo_lab']?>"><?php echo $vec['nombre'] ?></option>
              <?php } ?>
            </select>
            <input list="lol">
            <datalist id="lol">
              <?php
              $objs=$clasLaboratorio->mostrar($bd);
              while ($vec=mysql_fetch_assoc($objs)) {?>
                <option value="<?php echo $vec['codigo_lab']?>"><?php echo $vec['nombre'] ?></option>
              <?php } ?>
            </datalist>
          <button type="submit" name="button">Enviar</button>
    </form>

  </body>
</html>
