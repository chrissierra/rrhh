<link rel="stylesheet" href="./model/chat/chat_embebido/chat.css">

<div id="chat1">   
    <div id="header_chat">
	   <span id="sobre_chat1" class="glyphicon glyphicon-envelope" aria-hidden="true"></span><strong id="segunda_parte_chat1">Conversa con nosotros</strong><strong id="guion_chat">__</strong>
    </div>

    <div id="centro_chat">

<div id="chat_no_disponible">
    <p style="">Lo sentimos pero no estamos en línea por ahora. Por favor deja un mensaje y nos contactaremos a la brevedad.</p>
 
    <div class="col-sm-12" id="">
		<hr>
		<label for="">Nombre</label>
		<input type="email" class="form-control" id="nombre_envio_mail" placeholder="Escribe tu nombre">	
    </div>

    <div class="col-sm-12" id="">
		<label for="">Email</label>
		<input type="email" class="form-control" id="email_envio_mail" placeholder="Email">	
   </div>

<!--</div>-->

    <div class="col-sm-12" id="">
		<label for="">Numero</label>
		<input type="tel" class="form-control" id="numero_envio_mail" placeholder="Número telefónico">	
    </div>
</div>

<!--    ################################################################################       -->


<div id="iniciando_chat">
		<p style="margin-top:4px; margin-left:20px;">Si deseas conversar con nosotros escribe tu nombre, correo y número telefónico.</p>
	 
		<div class="col-sm-12" id="id_divs_iniciando_chat">
			<hr>
			<label for="">Nombre</label>
			<input type="email" class="form-control" id="iniciar_chat_nombre" placeholder="Escribe tu nombre">	
		</div>
	
		<div class="col-sm-12 divs_iniciando_chat" id="">
			<label for="">Email</label>
			<input type="email" class="form-control" id="iniciar_chat_email" placeholder="Email">	
	   </div>
	
	<!--</div>-->
	
		<div class="col-sm-12 divs_iniciando_chat" id="">
			<label for="">Numero</label>
			<input type="tel" class="form-control" id="iniciar_chat_numero" placeholder="Número telefónico">	
		</div>
	</div>




<ul id="ul_chat">

	<!--
	<li ><p style="color:black;font-size:16px;">Juan dice: </p>como estan?!?!? espero que todo bien mira te cuento lorem Lorem ipsum dolor sit.<small id="small_chat_li" style="color:grey;margin-left:20px;float:right;margin-top:10px;"><h5 style="font-size:10px;">11:23 PM</h5></small></li>
	-->
</ul>

	
    </div>

    <div id="footer_chat"> 

			<div class="col-sm-12" id="div_footer_inicio_chat" style="display:none">
					<hr>
					<textarea  cols="5" rows="2" type="email" class="form-control" id="iniciar_chat_texto" placeholder="Escribe tu mensaje"></textarea>
					<hr style="width:60%; border-top:0px;">
					<!--<span id="boton_enviar_chat" class="label label-danger">Enviar</span>-->
					<button id="boton_inicio_chat"  type="button" class="btn btn-sm btn-warning">Enviar</button>
			</div>


			<div class="col-sm-12" id="div_footer_chat_no_disponible">
					<hr>
					<textarea  cols="30" rows="2" type="email" class="form-control" id="texto_envio_mail" placeholder="Escribe tu mensaje"></textarea>
					<hr style="width:60%; border-top:0px;">
					<!--<span id="boton_enviar_chat" class="label label-danger">Enviar</span>-->
					<button id="boton_enviar_mail_no_disponible_chat"  type="button" class="btn btn-sm btn-warning">Enviar</button>
			</div>



			<div class="col-sm-12" id="div_footer_chat_disponible">
					<hr>
					<textarea  cols="30" rows="3" type="text" class="form-control" id="mensaje_chat_activo" placeholder="Escribe tu mensaje"></textarea>
					<hr style="width:60%; border-top:0px;">
					<!--<span id="boton_enviar_chat" class="label label-danger">Enviar</span>-->
					<button id="boton_envio_chat_activo"  type="button" class="btn btn-sm btn-warning">Enviar</button>
			</div>
	</div> 
</div>



<div id="chat"><span id="sobre_chat" class="glyphicon glyphicon-envelope" aria-hidden="true"></span><strong id="segunda_parte_chat">Conversa con nosotros</strong></div>
<script src="./model/chat/chat_embebido/chat.js"></script>