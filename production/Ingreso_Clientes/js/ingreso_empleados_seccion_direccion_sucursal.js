setTimeout(direccion_sucursal, 300)
function direccion_sucursal(){
    var comuna_sucursal= document.getElementById("select_sucursal");
    comuna_sucursal.addEventListener("change", ajax_direccion_sucursal_segun_comuna, false);
    
    function ajax_direccion_sucursal_segun_comuna(){
      //  alert(this.value);
path="./model/variables_empresa/visualizar_direccion_por_comuna_sucursales.php";
var nombre_empresa= document.getElementById("nombre_empresa");
//alert(nombre_empresa.value)
        fetch(path, {
            method: 'POST',
            body: 'comuna='+this.value+'&usuario='+nombre_empresa.value+'&kaka=adsf',
            headers: {
                "Content-Type": "application/x-www-form-urlencoded" }
            }).then(function(response)  {
            
          return response.text();
        })
        .then(function(miBlob) {
            
        // console.log(miBlob);
        var select_sucursal = document.getElementById("select_sucursal_direccion");
      //  alert(select_sucursal.value)
        select_sucursal.innerHTML= miBlob;
       // alert(miBlob);
        
        });

        //visualizar_direccion_por_comuna_sucursales.php
    }

}
