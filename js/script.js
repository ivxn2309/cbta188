// Manejo de cierre de sesion ========================
function closeSession(){
	$.post("index.php",{"salir":"1"}).done(function(){
		window.location.href="index.php";
	});
}

// Funciones de carga con Ajax ========================
function loadPartially(page, section, isUser, user){
	var url;
	switch(page){
		case 0:
			url = "_pages/empty.php";
			break;
		case 1:
			url = "_pages/banner.php";
			break;
		case 2:
			url = "_pages/home.php";
			break;
		case 3:
			url = "_pages/unregistered.php";
			break;
		case 4:
			url = "_pages/docentesLogin.php";
			break;
		case 7:
			url = "_pages/perfilDocente.php";
			break;
		case 8:
			url = "_pages/grupos.php";
			break;
	}
	$.ajax({
		type: "POST", 
		url: url,
		data:{
			"isUser":isUser,
			"username":user
		}, 
		success: function(datos){
			$(section).html(datos);
		}
	});
}


function loadContent(banner, main, isUser, user){
	loadPartially(banner, "#banner", isUser, user);
	loadPartially(main, "#main", isUser, user);
}

// Vaildacion de credenciales ============================
function validaDocente() {
	var txtUser = document.getElementById("docente_user");
	var txtPass = document.getElementById("docente_pass");
	var errUser = document.getElementById("err_doc_user");
	var errPass = document.getElementById("err_doc_pass");
	var success = true;

	// Si hay espacios en el campo de usuario
	if(/\s/.test(txtUser.value)){
		errUser.innerHTML = "Este campo no permite espacios en blanco";
		success = false;
	}
	// Si no cumple con el formato valido
	else if(!(/@cbta188/.test(txtUser.value))){
		errUser.innerHTML = "El usuario no es correcto";
		success = false;
	}
	// Si esta vacio el campo de usuario
	else if (txtUser.value.trim().length == 0){
		errUser.innerHTML = "Este campo no puede quedar vacío";
		success = false;
	}
	else{
		errUser.innerHTML = "";
	}

	//Si la contraseña esta en blanco
	if (txtPass.value.length < 8){
		errPass.innerHTML = "Este campo debe contener mínimo 8 caracteres";
		success = false;
	}
	else{
		errPass.innerHTML = "";
	}

	return success;
}

function validaAlumno() {
	var txtControl = document.getElementById("nocontrol");
	var txtCurp = document.getElementById("curp");
	var errControl = document.getElementById("err_nocontrol");
	var errCurp = document.getElementById("err_curp");
	var success = true;

	// Si hay espacios en el campo de numero de control
	if(/\s/.test(txtControl.value)){
		errControl.innerHTML = "Este campo no permite espacios en blanco";
		success = false;
	}
	// Si esta vacio el campo de numero de control
	else if (txtControl.value.trim().length == 0){
		errControl.innerHTML = "Este campo no puede quedar vacío";
		success = false;
	}
	else{
		errControl.innerHTML = "";
	}

	// Si hay espacios en la curp
	if(/\s/.test(txtCurp.value)){
		errCurp.innerHTML = "Este campo no permite espacios en blanco";
		success = false;
	}
	// Si esta vacio el campo de curp
	else if (txtCurp.value.trim().length == 0){
		errCurp.innerHTML = "Este campo no puede quedar vacío";
		success = false;
	}
	else{
		errCurp.innerHTML = "";
	}

	return success;
}

// 