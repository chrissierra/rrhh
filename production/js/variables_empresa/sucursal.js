var boton_submit= document.getElementById("boton_sucursal");
boton_submit.addEventListener("click", ingresa_sucursal, false);

function ingresa_sucursal(){
    calibrando_gps();
    obtener_locacion();

  
    var input_textos= document.getElementsByClassName("surcursal_clase");
    array1= new Array();

for (var i = 0; i < input_textos.length; i++) {
    
    
    array1.push(input_textos[i].value);
}

array1.push(localStorage.getItem("latitud"));
array1.push(localStorage.getItem("longitud"));
    funcion_fetch("./model/variables_empresa/sucursal.php", array1);
}


function obtener_locacion(){
    var options = {
    enableHighAccuracy: true,
    timeout: 1000,
    maximumAge: 0
  };
  
  function success(pos) {
    localStorage.setItem("latitud", "");
    localStorage.setItem("longitud", "");
    var crd = pos.coords;
    var latitud= crd.latitude;
    var longitud= crd.longitude; 
    localStorage.setItem("latitud", latitud);
    localStorage.setItem("longitud", longitud);

   /* 
   alert('Your current position is:');
  alert(`Latitude : ${crd.latitude}`);
   alert(`Longitude: ${crd.longitude}`);
    alert(`More or less ${crd.accuracy} meters.`);
*/  
};
  
  function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
  };
  
  navigator.geolocation.getCurrentPosition(success, error, options);
  }


  function calibrando_gps(){
    for (var index = 0; index < 150; index++) {
      navigator.geolocation.getCurrentPosition(function(pos){console.log(pos.coords)}, function(){console.log("error")}, {
        enableHighAccuracy: true,
        timeout: 1000,
        maximumAge: 0
        })
    }
    }
