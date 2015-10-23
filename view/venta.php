<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Venta</title>
    <link rel="stylesheet" href="../static/dist/semantic.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header class="ui segment">
      <div class="ui page grid">
        <div class="doubling two column row">
          <div class="center aligned column">
          <h1 class="myheader"><i class="shop icon"></i> Venta</h1>
          </div>
          <div class="center aligned column">
            <div class="ui secondary pointing menu">
              <a class=" item" href="/speech/">
                <i class="twitch icon"></i> Speechs
              </a>
              <a class=" item" href="/projects/">
                <i class="rocket icon"></i> Projects
              </a>
              <a class=" item" href="/acerca/">
                <i class="user icon"></i> Bio
              </a>
            </div>
          </div>
        </div>
      </div>
      </header>
    <div class="ui one column page grid" style="margin-top:1em;">
      <div class="ui segment column">
        <form action="" class="ui form" id="newProduct">
          <h4 class="ui dividing header">Informacion de la venta</h4>
          <div class="fields">
            <div class="field">
              <label for="">Cliente</label>
              <div class="field ui action fluid input">
                <select class="ui search dropdown" id="cliente">
                  <option value="">Cliente</option>
                  <option value="AL">Alabama</option>
                </select>
                <a href="" class="ui purple icon button"><i class="icon plus"></i></a>
              </div>
            </div>
            <div class="field">
              <label for="">Medicamento</label>
              <select class="ui search dropdown" id="medicamento">
                <option value="">Medicamento</option>
                <option value="AL">Alabama</option>
              </select>
            </div>
            <div class="field">
              <label for="">Cantidad</label>
              <input type="number" id="cantidad" step="1" value="0">
            </div>
            <div class="field">
              <label for="">&nbsp</label>
              <button type="submit" class="ui purple fluid button" name="button">Agregar</button>
            </div>
          </div>
        </form>
        <h4 class="ui dividing header">Productos</h4>
      </div>
    </div>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../static/dist/semantic.js" charset="utf-8"></script>
    <script src="../static/carrito.js" charset="utf-8"></script>
    <script type="text/javascript">

    </script>
  </body>
</html>
