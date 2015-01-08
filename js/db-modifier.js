function getRequestObject() {
	if (window.ActiveXObject) {
		return(new ActiveXObject("Microsoft.XMLHTTP"));
	} else if (window.XMLHttpRequest) {
		return(new XMLHttpRequest());
	} else {
		return(null);
	}
}

function showNotification(text, type){
	var a = noty({
		text: '<center><br>' + text + '<br><br></center>',
		type: type,
		layout: 'topRight',
		dismissQueue: true,
		timeout: true,
		maxVisible: 6,
		animation: {
			open: 'animated fadeInRight', // Animate.css class names
			close: 'animated fadeOutRight', // Animate.css class names
		}
	});
}

function updateDocente() {
	var txtUsuario = document.getElementById('usuario_doc').value;
	var txtNombre = document.getElementById('nombre_doc').value;
	var errNombre = document.getElementById('err_nombre_doc');
	var txtEmail = document.getElementById('email_doc').value;
	var errEmail = document.getElementById('err_email_doc');
	var txtPass = document.getElementById('pass_doc').value;
	var errPass = document.getElementById('err_pass_doc');
	var txtNewPass = document.getElementById('new_pass_doc').value;
	var errNewPass = document.getElementById('err_new_pass_doc');
	var txtCNewPass = document.getElementById('cnew_pass_doc').value;
	var errCNewPass = document.getElementById('err_cnew_pass_doc');
	var txtEdad = document.getElementById('edad_doc').value;
	var errEdad = document.getElementById('err_edad_doc');
	var txtProfesion = document.getElementById('profesion').value;
	var errProfesion = document.getElementById('err_profesion');
	var txtUrl = document.getElementById('url_doc').value;
	var errUrl = document.getElementById('err_url_doc');
	var txtCerti = document.getElementById('certificaciones').value;
	var errCerti = document.getElementById('err_certi');
	var txtFrase = document.getElementById('frase').value;
	var errFrase = document.getElementById('err_frase');
	var txtIntereses = document.getElementById('intereses').value;
	var errIntereses = document.getElementById('err_intereses');
	var txtDetalles = document.getElementById('detalles_doc').value;
	var errDetalles = document.getElementById('err_detalles_doc');
	var success = true;

	if(txtPass.length == 0){
		document.getElementById('new_pass_doc').value = "";
		document.getElementById('cnew_pass_doc').value = "";
	}
	else if(txtPass.length < 8){
		document.getElementById('new_pass_doc').value = "";
		document.getElementById('cnew_pass_doc').value = "";
		errPass.innerHTML = "Contraseña inválida<br>";
		var success = false;
	}
	else {
		errPass.innerHTML = "";
		if(txtNewPass.length < 8){
			errNewPass.innerHTML = "La contraseña debe contener al menos 8 caracteres<br>";
			var success = false;
		}
		else if(txtNewPass !== txtCNewPass){
			errCNewPass.innerHTML = "No concuerda con la anterior<br>";
			var success = false;
		}
		else {
			errCNewPass.innerHTML = "";
			errNewPass.innerHTML = "";
		}
	}	

	if(success){
		var request = getRequestObject();
		var data = {
			"usuario" : txtUsuario,
			"nombre" : txtNombre,
			"email" : txtEmail,
			"newpass" : txtNewPass,
			"pass" : txtPass,
			"edad" : txtEdad,
			"profesion" : txtProfesion,
			"url" : txtUrl,
			"certi" : txtCerti,
			"frase" : txtFrase,
			"intereses" : txtIntereses,
			"detalles" : txtDetalles 
		};

		request.onreadystatechange = function() {
			if (request.readyState== 4 && request.status == 200) {
				var result=request.responseText; 
				if (result.indexOf("Aviso: Contraseña incorrecta") > -1) {
					showNotification("Tu contraseña NO ha sido modificada", "warning");
				}
				if(result.indexOf("Aviso: Informacion basica guardada") > -1){
					showNotification("Informacion básica actualizada", "success");
				}
				if(result.indexOf("Correcto: Informacion adicional guardada") > -1){
					showNotification("Información adicional actualizada", "information");
				}
				if(result.indexOf("Error") > -1){
					showNotification("Hubo un problema, intenta mas tarde", "error");
				}
			}
		};

		request.open("POST","components/DocenteController.php", true);
		var data="actualizarDocente="+JSON.stringify(data);
		request.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=utf-8");
		request.send(data);
	}
}

function registraAlumno() {
	var txtNoControl = document.getElementById('nocontroltxt');
	var errNoControl = document.getElementById('err_nocontroltxt');
	var txtEmail = document.getElementById('emailtxt');
	var errEmail = document.getElementById('err_emailtxt');
	var txtEdad = document.getElementById('edadtxt');
	var errEdad = document.getElementById('err_edadtxt');
	var txtCurp = document.getElementById('curptxt');
	var errCurp = document.getElementById('err_curptxt');

	var success = true;

	// Si hay espacios en el campo de numero de control
	if(/\s/.test(txtNoControl.value)){
		errNoControl.innerHTML = "Este campo no permite espacios en blanco<br>";
		success = false;
	}
	// Si esta vacio el campo de numero de control
	else if (txtNoControl.value.trim().length == 0){
		errNoControl.innerHTML = "Este campo no puede quedar vacío<br>";
		success = false;
	}
	else{
		errNoControl.innerHTML = "";
	}

	// Si hay espacios en el email
	if(/\s/.test(txtEmail.value)){
		errEmail.innerHTML = "Este campo no permite espacios en blanco<br>";
		success = false;
	}
	// Si esta vacio el email
	else if (txtEmail.value.trim().length == 0){
		errEmail.innerHTML = "Este campo no puede quedar vacío<br>";
		success = false;
	}
	// Si hay espacios en el email
	else if(!(/@/.test(txtEmail.value))){
		errEmail.innerHTML = "Correo inválido<br>";
		success = false;
	}
	else{
		errEmail.innerHTML = "";
	}

	// Si hay espacios en la edad
	if(/\s/.test(txtEdad.value)){
		errEdad.innerHTML = "Este campo no permite espacios en blanco<br>";
		success = false;
	}
	// Si esta vacio el campo de curp
	else if (txtEdad.value.trim().length == 0){
		errEdad.innerHTML = "Este campo no puede quedar vacío<br>";
		success = false;
	}
	//Si la edad introducida no es un numero
	else if(isNaN(txtEdad.value)){
		errEdad.innerHTML = "Solo se permiten numeros<br>";
		success = false;
	}
	//Si la edad introducida es muy baja
	else if(txtEdad.value < 8 || txtEdad.value > 99){
		errEdad.innerHTML = "Edad inválida<br>";
		success = false;
	}
	else{
		errEdad.innerHTML = "";
	}

	// Si hay espacios en la curp
	if(/\s/.test(txtCurp.value)){
		errCurp.innerHTML = "Este campo no permite espacios en blanco<br>";
		success = false;
	}
	// Si esta vacio el campo de curp
	else if (txtCurp.value.trim().length == 0){
		errCurp.innerHTML = "Este campo no puede quedar vacío<br>";
		success = false;
	}
	else{
		errCurp.innerHTML = "";
	}

	if(success){
		var request = getRequestObject();
		var data = {
			control : txtNoControl.value,
			email : txtEmail.value,
			edad : txtEdad.value,
			curp : txtCurp.value
		};

		request.onreadystatechange = function() {
			if (request.readyState== 4 && request.status == 200) {
				var result=request.responseText; 
				if (result.indexOf("Listo") > -1) {
					$('#nav_alumnos').click();
					showNotification("Registro exitoso", "success");
					showNotification("Ahora puedes iniciar sesión", "information");
				}
				else if(result.indexOf("Invalido") > -1){
					showNotification("Tu número de control aún no tiene información asociada, comunícate con tu tutor", "warning");					
				}
				else {
					showNotification("No se pudo establecer la conexión", "error");
				}
			}
		};

		request.open("POST","components/Alumno.php", true);
		var data="registroAlumno="+escape(JSON.stringify(data));
		request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		request.send(data);
	}
}
