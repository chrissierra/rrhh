  

//window.onload=function(){
    setTimeout(function() {
        
    

        var guion_chat= document.getElementById("guion_chat");
        guion_chat.addEventListener("click", function(){
         document.getElementById("chat").style.display="flex";
         document.getElementById("chat1").style.display="none";
     
        }, false);
     
     
     
         var chat= document.getElementById("chat");
         chat.addEventListener("click", function(){
         this.style.display="none";
         var chat1=document.getElementById("chat1");
         chat1.style.display="flex";
     
     
         }, false)
    
    var boton_enviar_mail_no_disponible_chat=document.getElementById("boton_enviar_mail_no_disponible_chat");
    boton_enviar_mail_no_disponible_chat.addEventListener("click", enviar_correo_por_chat_no_disponible, false);
    
    var boton_inicio_chat=document.getElementById("boton_inicio_chat");
    boton_inicio_chat.addEventListener("click", funcion_comienzo_chat, false);    
    
    ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
        'accion=onload_chat', function(data){
    if(compara_strings(data, "true")){
    document.getElementById("div_footer_inicio_chat").style.display="flex";
    document.getElementById("iniciando_chat").style.display="flex";
    //document.getElementById("ul_chat").style.display="flex";
    document.getElementById("chat_no_disponible").style.display="none"
    document.getElementById("div_footer_chat_no_disponible").style.display="none";
    
    
    
    //div_footer_inicio_chat
    if(localStorage.getItem("clave")){
        
        setTimeout(function() {
        
            var boton_envio_chat_activo=document.getElementById("boton_envio_chat_activo");
            boton_envio_chat_activo.addEventListener("click", funcion_enviar_mensajes_boton, false); 
        
            document.getElementById("div_footer_inicio_chat").style.display="none";
            document.getElementById("iniciando_chat").style.display="none";
            document.getElementById("ul_chat").style.display="flex";
            document.getElementById("chat_no_disponible").style.display="none"
            document.getElementById("div_footer_chat_disponible").style.display="flex";
            document.getElementById('ul_chat').scrollTop = document.getElementById('ul_chat').scrollHeight;
            setInterval(intervalo_actualiza_chat, 800); 
        }, 400);
            
        }
    
    
    
    }else{
    
    
    /*
    ------------------------------------------------------------------------------------------------------------------------------
    */
    
    document.getElementById("div_footer_chat_no_disponible").style.display="flex";
    document.getElementById("div_footer_inicio_chat").style.display="none";
    
    /*
    --------------------------------------------------------------------------------------------------------------------------------
    */
    }
        });      
             
    
    
    }, 500);
    
    //} // fin funcion window.onload
    
    
    
    
    
    function funcion_comienzo_chat(){
     
        let nombre=document.getElementById("iniciar_chat_nombre").value;
        let email=document.getElementById("iniciar_chat_email").value;
        let numero=document.getElementById("iniciar_chat_numero").value;
        let texto=document.getElementById("iniciar_chat_texto").value;
    alert(texto)
    
        ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
        'accion=iniciar_chat'+"&nombre="+nombre+"&email="+email+"&numero="+numero+"&texto="+texto, function(data){
    
    
    if(compara_strings(data, "true")){
        
    localStorage.setItem("clave", email);
    localStorage.setItem("nombre", nombre);
    document.getElementById("div_footer_inicio_chat").style.display="none";
    document.getElementById("iniciando_chat").style.display="none";
    document.getElementById("ul_chat").style.display="flex";
    document.getElementById("chat_no_disponible").style.display="none"
    document.getElementById("div_footer_chat_disponible").style.display="flex";
    
    setTimeout(function() {
        var boton_envio_chat_activo=document.getElementById("boton_envio_chat_activo");
        boton_envio_chat_activo.addEventListener("click", funcion_enviar_mensajes_boton, false);   
    }, 400);
    
    
    setInterval(intervalo_actualiza_chat, 800);
    
    }
        }); 
    }
    
    
    
    
    function intervalo_actualiza_chat(){
    
       if(document.getElementById("chat").style.display === "none"){
        console.log("abierto el chat");
       
        ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
        'accion=verificar_leido'+"&id_plataforma="+localStorage.getItem('clave'), function(data){ console.log("En chat abierto: "+data) }); 
    
        document.getElementById("segunda_parte_chat").innerHTML='<strong id="segunda_parte_chat" style="margin-left:-15px;">Chat</strong>';
    //Sister ERP  | Recursos humanos :: Grupo sister
    document.title = "Sister ERP  | Recursos humanos :: Grupo sister";
    
       }else{
    
        ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
        'accion=verificar_no_leido'+"&id_plataforma="+localStorage.getItem('clave'), function(data){ 
            
            if(data!=0){
            console.log(data)
                document.getElementById("segunda_parte_chat").innerHTML='<strong id="segunda_parte_chat"><span class="badge" style="margin-left:-20px;">'+data+'</span>Chat</strong>'
                document.title = "("+data.trim()+") Mensaje nuevo";
            }
            console.log(data) 
        }); 
    
        
       } //fin IF que verifica display del chat, para verificar mensajes leidos
         
    
        ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
        'accion=actualizar_chat'+"&id_plataforma="+localStorage.getItem('clave'), function(data){
    document.getElementById("ul_chat").innerHTML=data;
    document.getElementById('ul_chat').scrollTop = document.getElementById('ul_chat').scrollHeight;
        }); 
    } //FIN FUNCION INTERVALO_ACTUALIZA_CHAT
    
    
    
    
    
    
    
    function funcion_enviar_mensajes_boton(){
    
    let texto=document.getElementById("mensaje_chat_activo").value;
    ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
    'accion=boton_chat_activo'+"&id_plataforma="+localStorage.getItem('clave')+"&texto="+texto+"&nombre="+localStorage.getItem("nombre"), function(data){
        document.getElementById("mensaje_chat_activo").value="";
    
    
        document.getElementById('ul_chat').scrollTop = document.getElementById('ul_chat').scrollHeight;
        
    
    
    }); 
    
    
    } // FIN FUNCION funcion_enviar_mensajes_boton
    
    
    
    
    
    
    
    
    
    function enviar_correo_por_chat_no_disponible(){
        let nombre= document.getElementById("nombre_envio_mail").value;
        let email=document.getElementById("email_envio_mail").value;
        let numero=document.getElementById("numero_envio_mail").value;
        let texto=document.getElementById("texto_envio_mail").value;
        ajax_fetch("http://localhost/Proyectos/jaja/bower_components/gentelella/production/model/web_ventas/servidor_web_ventas.php",
        'accion=enviar_mail'+"&texto="+texto+"&nombre="+nombre+"&email="+email+"&numero="+numero, function(data){ alert(data) }); 
    }
    
    
    
    
    
    
    
    
    /*
    
    Funciones:
    
    */
    
    function compara_strings(string1, string2){
    let resolucion="";
    if(string1.trim() === string2.trim()){
    resolucion= true;
    }else{
        resolucion=false;
    }
    return resolucion;
    }
       
    function ajax_fetch(path, data, funcion_resolve){
    
        let request = new Request(path, {
            method: 'POST', 
            body:data,
            headers: new Headers({
                "Content-Type": "application/x-www-form-urlencoded"
            })
        });
    
         fetch(request)
        .then((resp) => resp.text())
        .then((data)=> { funcion_resolve(data)} );
    
       
    }