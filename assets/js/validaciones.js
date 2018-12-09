
//validar los campos vacios en el formulario nuevo usuario
function cv_usuario() {
	if ($('#cedula').val() == "" || 
		$('#usuario').val() =="" ||
		$('#rol').val() =="" ||
		$('#clave').val() =="" ||
		$('#clave2').val() =="" ||
		$('#pregunta1').val() =="" ||
		$('#respuesta1').val() =="" ||
		$('#pregunta2').val() =="" ||
		$('#respuesta2').val() =="") {
		noti_cv();
		return false;
	} else {
		return confirm_clave();
	}
}

//notificacion para los campos vacios
function noti_cv() {
	Push.create("Hay campos vacios",{
	body: "Verifique que todos los campos esten llenos",
	icon: "../imagenes/advertencia.png",
	onClick: function (){
		$('#cedula').focus()
		this.close()
	}
	});
}

//notificacion para la confirmacion de contraseñas
function noti_confir_pass() {
	Push.create("Error en contraseñas",{
	body: "Las contraseñas no coinciden",
	icon: "../imagenes/x.jpg",
	onClick: function (){
		$('#clave').val('');
		$('#clave2').val('');
		$('#clave').focus();
		this.close()
	}
	});
}

//confirmacion de claves
function confirm_clave() {
	if ($('#clave').val() != $('#clave2').val()) {
		noti_confir_pass();		
		return false;
	} else{
		return true;
	}
}

//vaaciar los campos del formulario
function limpiar_campos() {
	$('#cedula').val(''); 
	$('#usuario').val('');
	$('#rol').val('');
	$('#clave').val('');
	$('#clave2').val('');
	$('#pregunta1').val('');
	$('#respuesta1').val('');
	$('#pregunta2').val('');
	$('#respuesta2').val('');
}



/*  Validar Solo Numeros */
function SoloNumeros(evt,id){
	if(window.event){// IE
		keynum = evt.keyCode;
	}else{
		keynum = evt.which;
	}
	//comprobamos si se encuentra en el rango
	if((keynum>47 && keynum<58) || keynum == 8 || keynum == 0){
		return true;
	}else{
		// solo se permiten numeros
		alert("solo se permiten numeros");
		return false;
	}
}
/*  Validar Solo Letras */
function SoloLetras(e){
	tecla = (document.all) ? e.keyCode : e.which; 
	   if (tecla==8) return true; // backspace
	if (tecla==32) return true; // espacio
	if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
	if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
	if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
	 
	patron = /[A-ZñÑa-z]/; //patron
	 
	te = String.fromCharCode(tecla); 
	//return patron.test(te); // prueba de patron
	if (!patron.test(te)){
		//solo se perimiten letras
		alert("solo se permiten letras");
		return false;
	}
}
/*  Validar Solo Numeros y Letras */
function SoloLetrasYnumeros(e){
	tecla = (document.all) ? e.keyCode : e.which; 
	   if (tecla==8) return true; // backspace
	if (tecla==32) return true; // espacio
	if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
	if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
	if (e.ctrlKey && tecla==88) { return true;} //Ctrl x
	 
	patron = /[A-ZñÑa-z0-9]/; //patron
	 
	te = String.fromCharCode(tecla); 
	//return patron.test(te); // prueba de patron
	if (!patron.test(te)){
		//solo se permiten letras y números
		alert("solo se permiten números y/o letras");
		return false;
	}
}
