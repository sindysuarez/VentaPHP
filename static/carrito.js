  $( document ).ready(function() {
    $('.ui.dropdown').dropdown();

  });
  $(function(){
    $('#newProduct').submit(function(e){
      var cliente = document.getElementById('cliente').value;
      var medicamento = document.getElementById('medicamento').value;
      var cantidad = document.getElementById('cantidad').value;
      var newproducts = [cliente,medicamento,cantidad];
      var products=new Array();
      if (localStorage["products"]) {
        products = JSON.parse(localStorage["products"]);
      }
      products.push(newproducts);
      localStorage["products"]=JSON.stringify(products);
      alert(localStorage["products"]);
      // localStorage.removeItem("products");
    });
  });
