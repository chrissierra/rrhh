var boton_submit= document.getElementById("boton_sucursal");
boton_submit.addEventListener("click", ingresa_sucursal, false);

function ingresa_sucursal(){
    var input_textos= document.getElementsByClassName("surcursal_clase");
    array1= new Array();

for (var i = 0; i < input_textos.length; i++) {
    
    
    array1.push(input_textos[i].value);
}
    funcion_fetch("./model/variables_empresa/sucursal.php", array1);
}