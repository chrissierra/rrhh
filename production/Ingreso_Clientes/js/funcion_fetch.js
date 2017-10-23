 
 function funcion_fetch(path, array_posting){
     fetch(path, {
	method: 'post',
	body: JSON.stringify(array_posting)
})
.then(function(response)  {
    
  return response.text();
})
.then(function(miBlob) {
    
 console.log(miBlob);



});
 }

 
function funcion_fetch_json(path, array_posting){
     fetch(path, {
	method: 'post',
	body: JSON.stringify(array_posting)
})
.then(function(response)  {
    
  return response.text();
})
.then(function(miBlob) {
    
 console.log(miBlob);
testing(miBlob);


});
 }