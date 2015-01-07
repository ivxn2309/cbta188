function getRequestObject() {
	if (window.ActiveXObject) {
		return(new ActiveXObject("Microsoft.XMLHTTP"));
	} else if (window.XMLHttpRequest) {
		return(new XMLHttpRequest());
	} else {
		return(null);
	}
}

function registraAlumno(){
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
		errNoControl.innerHTML = "Este campo no permite espacios en blanco";
		success = false;
	}
	// Si esta vacio el campo de numero de control
	else if (txtNoControl.value.trim().length == 0){
		errNoControl.innerHTML = "Este campo no puede quedar vacío";
		success = false;
	}
	else{
		errNoControl.innerHTML = "";
	}

	// Si hay espacios en el email
	if(/\s/.test(txtEmail.value)){
		errEmail.innerHTML = "Este campo no permite espacios en blanco";
		success = false;
	}
	// Si esta vacio el email
	else if (txtEmail.value.trim().length == 0){
		errEmail.innerHTML = "Este campo no puede quedar vacío";
		success = false;
	}
	// Si hay espacios en el email
	else if(!(/@/.test(txtEmail.value))){
		errEmail.innerHTML = "Correo inválido";
		success = false;
	}
	else{
		errEmail.innerHTML = "";
	}

	// Si hay espacios en la edad
	if(/\s/.test(txtEdad.value)){
		errEdad.innerHTML = "Este campo no permite espacios en blanco";
		success = false;
	}
	// Si esta vacio el campo de curp
	else if (txtEdad.value.trim().length == 0){
		errEdad.innerHTML = "Este campo no puede quedar vacío";
		success = false;
	}
	//Si la edad introducida no es un numero
	else if(isNaN(txtEdad.value)){
		errEdad.innerHTML = "Solo se permiten numeros";
		success = false;
	}
	//Si la edad introducida es muy baja
	else if(txtEdad.value < 8 || txtEdad.value > 99){
		errEdad.innerHTML = "Edad invalida";
		success = false;
	}
	else{
		errEdad.innerHTML = "";
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
				if (result.indexOf("Error") == -1) {
					$('#nav_alumnos').click();
					var m = noty({
						text: '<center><br>Registro exitoso<br><br></center>',
						type: 'success',
						layout: 'topRight',
						dismissQueue: true,
						animation: {
							open: 'animated fadeInRight', // Animate.css class names
							close: 'animated fadeOutRight', // Animate.css class names
						}
					});
					var n = noty({
						text: '<center><br>Ahora puedes iniciar sesión<br><br></center>',
						type: 'information',
						layout: 'topRight',
						dismissQueue: true,
						animation: {
							open: 'animated fadeInRight', // Animate.css class names
							close: 'animated fadeOutRight', // Animate.css class names
						}
					});
				}
				else {
					var o = noty({
						text: '<center><br>No se pudo establecer la conexión<br><br></center>',
						type: 'error',
						layout: 'topRight',
						dismissQueue: true,
						animation: {
							open: 'animated fadeInRight', // Animate.css class names
							close: 'animated fadeOutRight', // Animate.css class names
						}
					});
				}
			}
		};

		request.open("POST","components/Alumno.php", true);
		var data="registroAlumno="+escape(JSON.stringify(data));
		request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		request.send(data);
	}
}